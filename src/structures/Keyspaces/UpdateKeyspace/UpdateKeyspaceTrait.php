<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateKeyspace;

trait UpdateKeyspaceTrait
{
    /**
     * @param UpdateKeyspaceRequest $args
     * @return UpdateKeyspaceResponse
     */
    public function updateKeyspace(UpdateKeyspaceRequest $args)
    {
        $result = parent::updateKeyspace($args->toArray());
        return new UpdateKeyspaceResponse($result->toArray());
    }
}
