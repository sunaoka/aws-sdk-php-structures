<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingRegistrationTaskReports;

trait ListThingRegistrationTaskReportsTrait
{
    /**
     * @param ListThingRegistrationTaskReportsRequest $args
     * @return ListThingRegistrationTaskReportsResponse
     */
    public function listThingRegistrationTaskReports(ListThingRegistrationTaskReportsRequest $args)
    {
        $result = parent::listThingRegistrationTaskReports($args->toArray());
        return new ListThingRegistrationTaskReportsResponse($result->toArray());
    }
}
