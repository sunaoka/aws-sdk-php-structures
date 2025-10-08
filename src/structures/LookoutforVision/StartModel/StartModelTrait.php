<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StartModel;

trait StartModelTrait
{
    /**
     * @param StartModelRequest $args
     * @return StartModelResponse
     */
    public function startModel(StartModelRequest $args)
    {
        $result = parent::startModel($args->toArray());
        return new StartModelResponse($result->toArray());
    }
}
