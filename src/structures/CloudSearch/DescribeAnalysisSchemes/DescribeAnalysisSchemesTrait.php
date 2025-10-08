<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAnalysisSchemes;

trait DescribeAnalysisSchemesTrait
{
    /**
     * @param DescribeAnalysisSchemesRequest $args
     * @return DescribeAnalysisSchemesResponse
     */
    public function describeAnalysisSchemes(DescribeAnalysisSchemesRequest $args)
    {
        $result = parent::describeAnalysisSchemes($args->toArray());
        return new DescribeAnalysisSchemesResponse($result->toArray());
    }
}
