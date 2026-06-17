<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreatModel;

trait UpdateThreatModelTrait
{
    /**
     * @param UpdateThreatModelRequest $args
     * @return UpdateThreatModelResponse
     */
    public function updateThreatModel(UpdateThreatModelRequest $args)
    {
        $result = parent::updateThreatModel($args->toArray());
        return new UpdateThreatModelResponse($result->toArray());
    }
}
