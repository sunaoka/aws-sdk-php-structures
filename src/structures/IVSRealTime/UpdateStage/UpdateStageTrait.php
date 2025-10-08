<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage;

trait UpdateStageTrait
{
    /**
     * @param UpdateStageRequest $args
     * @return UpdateStageResponse
     */
    public function updateStage(UpdateStageRequest $args)
    {
        $result = parent::updateStage($args->toArray());
        return new UpdateStageResponse($result->toArray());
    }
}
