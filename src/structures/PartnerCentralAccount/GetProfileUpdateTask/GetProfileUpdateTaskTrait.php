<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetProfileUpdateTask;

trait GetProfileUpdateTaskTrait
{
    /**
     * @param GetProfileUpdateTaskRequest $args
     * @return GetProfileUpdateTaskResponse
     */
    public function getProfileUpdateTask(GetProfileUpdateTaskRequest $args)
    {
        $result = parent::getProfileUpdateTask($args->toArray());
        return new GetProfileUpdateTaskResponse($result->toArray());
    }
}
