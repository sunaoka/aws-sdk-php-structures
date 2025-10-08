<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateNamespace;

trait UpdateNamespaceTrait
{
    /**
     * @param UpdateNamespaceRequest $args
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace(UpdateNamespaceRequest $args)
    {
        $result = parent::updateNamespace($args->toArray());
        return new UpdateNamespaceResponse($result->toArray());
    }
}
