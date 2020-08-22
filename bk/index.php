<?php

public function renderWidget($hookName = null, array $configuration = [])
{
  if (!$this->isCached($this->templateFile, $this->getCacheId('name_module'))) {
    $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
  }

  return $this->fetch($this->templateFile, $this->getCacheId('name_module'));
}

public function getWidgetVariables($hookName = null, array $configuration = [])
{
  return array(
    'Variable 1' => 'Valor 1',
  );
}