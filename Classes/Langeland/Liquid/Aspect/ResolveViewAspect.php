<?php

namespace Langeland\Liquid\Aspect;

use Neos\Flow\Annotations as Flow;

/**
 * @Flow\Aspect
 */
class ResolveViewAspect {


    /**
     * Overwrite template path and filename for StandardController
     *
     * @param \Neos\Flow\Aop\JoinPointInterface $joinPoint
     * @Flow\After("method(Neos\Flow\Mvc\Controller\StandardController->resolveView())")
     * @return void
     */
    public function resolveView(\Neos\Flow\Aop\JoinPointInterface $joinPoint) {
        /** @var \Neos\Flow\Mvc\View\ViewInterface $view */
        $view = $joinPoint->getResult();
        $view->setTemplatePathAndFilename('resource://Langeland.Liquid/Private/Mvc/StandardView_Template.html');
    }

}