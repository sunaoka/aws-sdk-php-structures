<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateKeyspace;

trait CreateKeyspaceTrait
{
    /**
     * @param CreateKeyspaceRequest $args
     * @return CreateKeyspaceResponse
     */
    public function createKeyspace(CreateKeyspaceRequest $args)
    {
        $result = parent::createKeyspace($args->toArray());
        return new CreateKeyspaceResponse($result->toArray());
    }
}
