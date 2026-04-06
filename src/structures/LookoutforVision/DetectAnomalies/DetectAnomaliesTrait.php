<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies;

trait DetectAnomaliesTrait
{
    /**
     * @param DetectAnomaliesRequest $args
     * @return DetectAnomaliesResponse
     */
    public function detectAnomalies(DetectAnomaliesRequest $args)
    {
        $result = parent::detectAnomalies($args->toArray());
        return new DetectAnomaliesResponse($result->toArray());
    }
}
