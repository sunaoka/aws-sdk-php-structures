<?php

namespace Sunaoka\Aws\Structures\Keyspaces\DeleteKeyspace;

trait DeleteKeyspaceTrait
{
    /**
     * @param DeleteKeyspaceRequest $args
     * @return DeleteKeyspaceResponse
     */
    public function deleteKeyspace(DeleteKeyspaceRequest $args)
    {
        $result = parent::deleteKeyspace($args->toArray());
        return new DeleteKeyspaceResponse($result->toArray());
    }
}
