<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateBusinessReportSchedule;

trait CreateBusinessReportScheduleTrait
{
    /**
     * @param CreateBusinessReportScheduleRequest $args
     * @return CreateBusinessReportScheduleResponse
     */
    public function createBusinessReportSchedule(CreateBusinessReportScheduleRequest $args)
    {
        $result = parent::createBusinessReportSchedule($args->toArray());
        return new CreateBusinessReportScheduleResponse($result->toArray());
    }
}
