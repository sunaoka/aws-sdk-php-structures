<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateTestSetDiscrepancyReport;

trait CreateTestSetDiscrepancyReportTrait
{
    /**
     * @param CreateTestSetDiscrepancyReportRequest $args
     * @return CreateTestSetDiscrepancyReportResponse
     */
    public function createTestSetDiscrepancyReport(CreateTestSetDiscrepancyReportRequest $args)
    {
        $result = parent::createTestSetDiscrepancyReport($args->toArray());
        return new CreateTestSetDiscrepancyReportResponse($result->toArray());
    }
}
