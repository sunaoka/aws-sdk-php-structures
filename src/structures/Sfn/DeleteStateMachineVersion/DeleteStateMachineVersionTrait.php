<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteStateMachineVersion;

trait DeleteStateMachineVersionTrait
{
    /**
     * @param DeleteStateMachineVersionRequest $args
     * @return DeleteStateMachineVersionResponse
     */
    public function deleteStateMachineVersion(DeleteStateMachineVersionRequest $args)
    {
        $result = parent::deleteStateMachineVersion($args->toArray());
        return new DeleteStateMachineVersionResponse($result->toArray());
    }
}
