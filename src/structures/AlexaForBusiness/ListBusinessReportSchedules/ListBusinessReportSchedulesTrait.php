<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListBusinessReportSchedules;

trait ListBusinessReportSchedulesTrait
{
    /**
     * @param ListBusinessReportSchedulesRequest $args
     * @return ListBusinessReportSchedulesResponse
     */
    public function listBusinessReportSchedules(ListBusinessReportSchedulesRequest $args)
    {
        $result = parent::listBusinessReportSchedules($args->toArray());
        return new ListBusinessReportSchedulesResponse($result->toArray());
    }
}
