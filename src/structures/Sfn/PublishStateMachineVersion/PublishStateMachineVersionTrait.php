<?php

namespace Sunaoka\Aws\Structures\Sfn\PublishStateMachineVersion;

trait PublishStateMachineVersionTrait
{
    /**
     * @param PublishStateMachineVersionRequest $args
     * @return PublishStateMachineVersionResponse
     */
    public function publishStateMachineVersion(PublishStateMachineVersionRequest $args)
    {
        $result = parent::publishStateMachineVersion($args->toArray());
        return new PublishStateMachineVersionResponse($result->toArray());
    }
}
