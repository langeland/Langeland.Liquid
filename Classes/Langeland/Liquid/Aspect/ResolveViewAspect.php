<?php

namespace Langeland\Liquid\Aspect;

use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Aspect
 */
class ResolveViewAspect {


    /**
     * Overwrite template path and filename for StandardController
     *
     * @param \TYPO3\Flow\AOP\JoinPointInterface $joinPoint
     * @Flow\After("method(TYPO3\Flow\Mvc\Controller\StandardController->resolveView())")
     * @return void
     */
    public function resolveView(\TYPO3\Flow\AOP\JoinPointInterface $joinPoint) {
        /** @var \TYPO3\Flow\Mvc\View\ViewInterface $view */
        $view = $joinPoint->getResult();
        $view->setTemplatePathAndFilename('resource://Langeland.Liquid/Private/Mvc/StandardView_Template.html');
    }

}