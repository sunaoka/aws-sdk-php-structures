<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorLsaAnalysis;

trait DescribeFleetAdvisorLsaAnalysisTrait
{
    /**
     * @param DescribeFleetAdvisorLsaAnalysisRequest $args
     * @return DescribeFleetAdvisorLsaAnalysisResponse
     */
    public function describeFleetAdvisorLsaAnalysis(DescribeFleetAdvisorLsaAnalysisRequest $args)
    {
        $result = parent::describeFleetAdvisorLsaAnalysis($args->toArray());
        return new DescribeFleetAdvisorLsaAnalysisResponse($result->toArray());
    }
}
