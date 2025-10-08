<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStage;

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
