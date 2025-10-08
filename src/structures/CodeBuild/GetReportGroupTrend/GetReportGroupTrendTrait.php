<?php

namespace Sunaoka\Aws\Structures\CodeBuild\GetReportGroupTrend;

trait GetReportGroupTrendTrait
{
    /**
     * @param GetReportGroupTrendRequest $args
     * @return GetReportGroupTrendResponse
     */
    public function getReportGroupTrend(GetReportGroupTrendRequest $args)
    {
        $result = parent::getReportGroupTrend($args->toArray());
        return new GetReportGroupTrendResponse($result->toArray());
    }
}
