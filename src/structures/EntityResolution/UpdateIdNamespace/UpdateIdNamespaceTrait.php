<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace;

trait UpdateIdNamespaceTrait
{
    /**
     * @param UpdateIdNamespaceRequest $args
     * @return UpdateIdNamespaceResponse
     */
    public function updateIdNamespace(UpdateIdNamespaceRequest $args)
    {
        $result = parent::updateIdNamespace($args->toArray());
        return new UpdateIdNamespaceResponse($result->toArray());
    }
}
