<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetStage;

trait GetStageTrait
{
    /**
     * @param GetStageRequest $args
     * @return GetStageResponse
     */
    public function getStage(GetStageRequest $args)
    {
        $result = parent::getStage($args->toArray());
        return new GetStageResponse($result->toArray());
    }
}
