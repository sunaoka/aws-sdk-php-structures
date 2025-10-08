<?php

namespace Sunaoka\Aws\Structures\Redshift\RegisterNamespace;

trait RegisterNamespaceTrait
{
    /**
     * @param RegisterNamespaceRequest $args
     * @return RegisterNamespaceResponse
     */
    public function registerNamespace(RegisterNamespaceRequest $args)
    {
        $result = parent::registerNamespace($args->toArray());
        return new RegisterNamespaceResponse($result->toArray());
    }
}
