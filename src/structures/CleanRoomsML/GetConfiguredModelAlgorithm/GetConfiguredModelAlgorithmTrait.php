<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithm;

trait GetConfiguredModelAlgorithmTrait
{
    /**
     * @param GetConfiguredModelAlgorithmRequest $args
     * @return GetConfiguredModelAlgorithmResponse
     */
    public function getConfiguredModelAlgorithm(GetConfiguredModelAlgorithmRequest $args)
    {
        $result = parent::getConfiguredModelAlgorithm($args->toArray());
        return new GetConfiguredModelAlgorithmResponse($result->toArray());
    }
}
