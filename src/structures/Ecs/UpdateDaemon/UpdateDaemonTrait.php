<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateDaemon;

trait UpdateDaemonTrait
{
    /**
     * @param UpdateDaemonRequest $args
     * @return UpdateDaemonResponse
     */
    public function updateDaemon(UpdateDaemonRequest $args)
    {
        $result = parent::updateDaemon($args->toArray());
        return new UpdateDaemonResponse($result->toArray());
    }
}
