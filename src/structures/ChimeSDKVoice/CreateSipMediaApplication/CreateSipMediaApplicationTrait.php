<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateSipMediaApplication;

trait CreateSipMediaApplicationTrait
{
    /**
     * @param CreateSipMediaApplicationRequest $args
     * @return CreateSipMediaApplicationResponse
     */
    public function createSipMediaApplication(CreateSipMediaApplicationRequest $args)
    {
        $result = parent::createSipMediaApplication($args->toArray());
        return new CreateSipMediaApplicationResponse($result->toArray());
    }
}
