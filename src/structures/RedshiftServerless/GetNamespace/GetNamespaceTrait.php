<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetNamespace;

trait GetNamespaceTrait
{
    /**
     * @param GetNamespaceRequest $args
     * @return GetNamespaceResponse
     */
    public function getNamespace(GetNamespaceRequest $args)
    {
        $result = parent::getNamespace($args->toArray());
        return new GetNamespaceResponse($result->toArray());
    }
}
