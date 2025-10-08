<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfAnalyses;

trait ListWhatIfAnalysesTrait
{
    /**
     * @param ListWhatIfAnalysesRequest $args
     * @return ListWhatIfAnalysesResponse
     */
    public function listWhatIfAnalyses(ListWhatIfAnalysesRequest $args)
    {
        $result = parent::listWhatIfAnalyses($args->toArray());
        return new ListWhatIfAnalysesResponse($result->toArray());
    }
}
