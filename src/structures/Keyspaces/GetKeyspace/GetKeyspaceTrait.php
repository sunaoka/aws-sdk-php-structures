<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetKeyspace;

trait GetKeyspaceTrait
{
    /**
     * @param GetKeyspaceRequest $args
     * @return GetKeyspaceResponse
     */
    public function getKeyspace(GetKeyspaceRequest $args)
    {
        $result = parent::getKeyspace($args->toArray());
        return new GetKeyspaceResponse($result->toArray());
    }
}
