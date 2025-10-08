<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfAnalysis;

trait DescribeWhatIfAnalysisTrait
{
    /**
     * @param DescribeWhatIfAnalysisRequest $args
     * @return DescribeWhatIfAnalysisResponse
     */
    public function describeWhatIfAnalysis(DescribeWhatIfAnalysisRequest $args)
    {
        $result = parent::describeWhatIfAnalysis($args->toArray());
        return new DescribeWhatIfAnalysisResponse($result->toArray());
    }
}
