<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateImageUsageReport;

trait CreateImageUsageReportTrait
{
    /**
     * @param CreateImageUsageReportRequest $args
     * @return CreateImageUsageReportResponse
     */
    public function createImageUsageReport(CreateImageUsageReportRequest $args)
    {
        $result = parent::createImageUsageReport($args->toArray());
        return new CreateImageUsageReportResponse($result->toArray());
    }
}
