<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies;

trait GetAnomaliesTrait
{
    /**
     * @param GetAnomaliesRequest $args
     * @return GetAnomaliesResponse
     */
    public function getAnomalies(GetAnomaliesRequest $args)
    {
        $result = parent::getAnomalies($args->toArray());
        return new GetAnomaliesResponse($result->toArray());
    }
}
