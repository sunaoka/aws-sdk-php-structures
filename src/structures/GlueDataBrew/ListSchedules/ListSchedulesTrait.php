<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListSchedules;

trait ListSchedulesTrait
{
    /**
     * @param ListSchedulesRequest $args
     * @return ListSchedulesResponse
     */
    public function listSchedules(ListSchedulesRequest $args)
    {
        $result = parent::listSchedules($args->toArray());
        return new ListSchedulesResponse($result->toArray());
    }
}
