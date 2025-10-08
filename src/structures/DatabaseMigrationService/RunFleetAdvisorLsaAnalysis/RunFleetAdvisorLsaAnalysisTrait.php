<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RunFleetAdvisorLsaAnalysis;

trait RunFleetAdvisorLsaAnalysisTrait
{
    /**
     * @return RunFleetAdvisorLsaAnalysisResponse
     */
    public function runFleetAdvisorLsaAnalysis()
    {
        $result = parent::runFleetAdvisorLsaAnalysis();
        return new RunFleetAdvisorLsaAnalysisResponse($result->toArray());
    }
}
