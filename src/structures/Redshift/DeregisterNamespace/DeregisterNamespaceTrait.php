<?php

namespace Sunaoka\Aws\Structures\Redshift\DeregisterNamespace;

trait DeregisterNamespaceTrait
{
    /**
     * @param DeregisterNamespaceRequest $args
     * @return DeregisterNamespaceResponse
     */
    public function deregisterNamespace(DeregisterNamespaceRequest $args)
    {
        $result = parent::deregisterNamespace($args->toArray());
        return new DeregisterNamespaceResponse($result->toArray());
    }
}
