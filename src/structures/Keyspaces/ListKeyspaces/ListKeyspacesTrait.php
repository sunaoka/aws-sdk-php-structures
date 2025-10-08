<?php

namespace Sunaoka\Aws\Structures\Keyspaces\ListKeyspaces;

trait ListKeyspacesTrait
{
    /**
     * @param ListKeyspacesRequest $args
     * @return ListKeyspacesResponse
     */
    public function listKeyspaces(ListKeyspacesRequest $args)
    {
        $result = parent::listKeyspaces($args->toArray());
        return new ListKeyspacesResponse($result->toArray());
    }
}
