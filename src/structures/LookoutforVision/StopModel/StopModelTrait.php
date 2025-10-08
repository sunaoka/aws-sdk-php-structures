<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StopModel;

trait StopModelTrait
{
    /**
     * @param StopModelRequest $args
     * @return StopModelResponse
     */
    public function stopModel(StopModelRequest $args)
    {
        $result = parent::stopModel($args->toArray());
        return new StopModelResponse($result->toArray());
    }
}
