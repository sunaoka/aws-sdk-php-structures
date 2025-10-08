<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules;

trait ListPrefetchSchedulesTrait
{
    /**
     * @param ListPrefetchSchedulesRequest $args
     * @return ListPrefetchSchedulesResponse
     */
    public function listPrefetchSchedules(ListPrefetchSchedulesRequest $args)
    {
        $result = parent::listPrefetchSchedules($args->toArray());
        return new ListPrefetchSchedulesResponse($result->toArray());
    }
}
