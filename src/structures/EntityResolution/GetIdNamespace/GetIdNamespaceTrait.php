<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdNamespace;

trait GetIdNamespaceTrait
{
    /**
     * @param GetIdNamespaceRequest $args
     * @return GetIdNamespaceResponse
     */
    public function getIdNamespace(GetIdNamespaceRequest $args)
    {
        $result = parent::getIdNamespace($args->toArray());
        return new GetIdNamespaceResponse($result->toArray());
    }
}
