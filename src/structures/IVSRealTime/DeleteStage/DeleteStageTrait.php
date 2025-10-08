<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteStage;

trait DeleteStageTrait
{
    /**
     * @param DeleteStageRequest $args
     * @return DeleteStageResponse
     */
    public function deleteStage(DeleteStageRequest $args)
    {
        $result = parent::deleteStage($args->toArray());
        return new DeleteStageResponse($result->toArray());
    }
}
