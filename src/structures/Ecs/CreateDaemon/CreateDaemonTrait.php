<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateDaemon;

trait CreateDaemonTrait
{
    /**
     * @param CreateDaemonRequest $args
     * @return CreateDaemonResponse
     */
    public function createDaemon(CreateDaemonRequest $args)
    {
        $result = parent::createDaemon($args->toArray());
        return new CreateDaemonResponse($result->toArray());
    }
}
