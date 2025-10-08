<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModelAnalysis;

trait DescribeDetectorModelAnalysisTrait
{
    /**
     * @param DescribeDetectorModelAnalysisRequest $args
     * @return DescribeDetectorModelAnalysisResponse
     */
    public function describeDetectorModelAnalysis(DescribeDetectorModelAnalysisRequest $args)
    {
        $result = parent::describeDetectorModelAnalysis($args->toArray());
        return new DescribeDetectorModelAnalysisResponse($result->toArray());
    }
}
