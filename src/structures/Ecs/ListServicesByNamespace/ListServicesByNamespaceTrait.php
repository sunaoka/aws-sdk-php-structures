<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServicesByNamespace;

trait ListServicesByNamespaceTrait
{
    /**
     * @param ListServicesByNamespaceRequest $args
     * @return ListServicesByNamespaceResponse
     */
    public function listServicesByNamespace(ListServicesByNamespaceRequest $args)
    {
        $result = parent::listServicesByNamespace($args->toArray());
        return new ListServicesByNamespaceResponse($result->toArray());
    }
}
