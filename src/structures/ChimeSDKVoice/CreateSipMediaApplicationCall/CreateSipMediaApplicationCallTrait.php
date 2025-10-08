<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateSipMediaApplicationCall;

trait CreateSipMediaApplicationCallTrait
{
    /**
     * @param CreateSipMediaApplicationCallRequest $args
     * @return CreateSipMediaApplicationCallResponse
     */
    public function createSipMediaApplicationCall(CreateSipMediaApplicationCallRequest $args)
    {
        $result = parent::createSipMediaApplicationCall($args->toArray());
        return new CreateSipMediaApplicationCallResponse($result->toArray());
    }
}
