<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListNamespaces;

trait ListNamespacesTrait
{
    /**
     * @param ListNamespacesRequest $args
     * @return ListNamespacesResponse
     */
    public function listNamespaces(ListNamespacesRequest $args)
    {
        $result = parent::listNamespaces($args->toArray());
        return new ListNamespacesResponse($result->toArray());
    }
}
