<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport;

trait GetInsightRuleReportTrait
{
    /**
     * @param GetInsightRuleReportRequest $args
     * @return GetInsightRuleReportResponse
     */
    public function getInsightRuleReport(GetInsightRuleReportRequest $args)
    {
        $result = parent::getInsightRuleReport($args->toArray());
        return new GetInsightRuleReportResponse($result->toArray());
    }
}
