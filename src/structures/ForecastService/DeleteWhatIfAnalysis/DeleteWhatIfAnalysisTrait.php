<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteWhatIfAnalysis;

trait DeleteWhatIfAnalysisTrait
{
    /**
     * @param DeleteWhatIfAnalysisRequest $args
     * @return void
     */
    public function deleteWhatIfAnalysis(DeleteWhatIfAnalysisRequest $args)
    {
        parent::deleteWhatIfAnalysis($args->toArray());
    }
}
