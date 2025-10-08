<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfAnalysis;

trait CreateWhatIfAnalysisTrait
{
    /**
     * @param CreateWhatIfAnalysisRequest $args
     * @return CreateWhatIfAnalysisResponse
     */
    public function createWhatIfAnalysis(CreateWhatIfAnalysisRequest $args)
    {
        $result = parent::createWhatIfAnalysis($args->toArray());
        return new CreateWhatIfAnalysisResponse($result->toArray());
    }
}
