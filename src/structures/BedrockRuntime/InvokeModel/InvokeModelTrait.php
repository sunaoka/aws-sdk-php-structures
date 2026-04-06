<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModel;

trait InvokeModelTrait
{
    /**
     * @param InvokeModelRequest $args
     * @return InvokeModelResponse
     */
    public function invokeModel(InvokeModelRequest $args)
    {
        $result = parent::invokeModel($args->toArray());
        return new InvokeModelResponse($result->toArray());
    }
}
