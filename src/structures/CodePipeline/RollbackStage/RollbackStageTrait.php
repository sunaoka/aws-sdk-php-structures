<?php

namespace Sunaoka\Aws\Structures\CodePipeline\RollbackStage;

trait RollbackStageTrait
{
    /**
     * @param RollbackStageRequest $args
     * @return RollbackStageResponse
     */
    public function rollbackStage(RollbackStageRequest $args)
    {
        $result = parent::rollbackStage($args->toArray());
        return new RollbackStageResponse($result->toArray());
    }
}
