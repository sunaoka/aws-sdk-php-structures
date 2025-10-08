<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysis;

trait DescribeAnalysisTrait
{
    /**
     * @param DescribeAnalysisRequest $args
     * @return DescribeAnalysisResponse
     */
    public function describeAnalysis(DescribeAnalysisRequest $args)
    {
        $result = parent::describeAnalysis($args->toArray());
        return new DescribeAnalysisResponse($result->toArray());
    }
}
