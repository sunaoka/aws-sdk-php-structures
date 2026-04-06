<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateBusinessReportSchedule;

trait UpdateBusinessReportScheduleTrait
{
    /**
     * @param UpdateBusinessReportScheduleRequest $args
     * @return UpdateBusinessReportScheduleResponse
     */
    public function updateBusinessReportSchedule(UpdateBusinessReportScheduleRequest $args)
    {
        $result = parent::updateBusinessReportSchedule($args->toArray());
        return new UpdateBusinessReportScheduleResponse($result->toArray());
    }
}
