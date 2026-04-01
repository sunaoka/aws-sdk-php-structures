<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteDaemon;

trait DeleteDaemonTrait
{
    /**
     * @param DeleteDaemonRequest $args
     * @return DeleteDaemonResponse
     */
    public function deleteDaemon(DeleteDaemonRequest $args)
    {
        $result = parent::deleteDaemon($args->toArray());
        return new DeleteDaemonResponse($result->toArray());
    }
}
