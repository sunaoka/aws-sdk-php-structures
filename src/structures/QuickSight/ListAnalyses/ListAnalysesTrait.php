<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAnalyses;

trait ListAnalysesTrait
{
    /**
     * @param ListAnalysesRequest $args
     * @return ListAnalysesResponse
     */
    public function listAnalyses(ListAnalysesRequest $args)
    {
        $result = parent::listAnalyses($args->toArray());
        return new ListAnalysesResponse($result->toArray());
    }
}
