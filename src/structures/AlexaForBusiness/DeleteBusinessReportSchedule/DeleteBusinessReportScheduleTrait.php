<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteBusinessReportSchedule;

trait DeleteBusinessReportScheduleTrait
{
    /**
     * @param DeleteBusinessReportScheduleRequest $args
     * @return DeleteBusinessReportScheduleResponse
     */
    public function deleteBusinessReportSchedule(DeleteBusinessReportScheduleRequest $args)
    {
        $result = parent::deleteBusinessReportSchedule($args->toArray());
        return new DeleteBusinessReportScheduleResponse($result->toArray());
    }
}
