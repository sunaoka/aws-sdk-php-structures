<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartProfileUpdateTask;

trait StartProfileUpdateTaskTrait
{
    /**
     * @param StartProfileUpdateTaskRequest $args
     * @return StartProfileUpdateTaskResponse
     */
    public function startProfileUpdateTask(StartProfileUpdateTaskRequest $args)
    {
        $result = parent::startProfileUpdateTask($args->toArray());
        return new StartProfileUpdateTaskResponse($result->toArray());
    }
}
