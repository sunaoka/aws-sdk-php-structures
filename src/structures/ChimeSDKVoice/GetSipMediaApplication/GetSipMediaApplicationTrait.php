<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSipMediaApplication;

trait GetSipMediaApplicationTrait
{
    /**
     * @param GetSipMediaApplicationRequest $args
     * @return GetSipMediaApplicationResponse
     */
    public function getSipMediaApplication(GetSipMediaApplicationRequest $args)
    {
        $result = parent::getSipMediaApplication($args->toArray());
        return new GetSipMediaApplicationResponse($result->toArray());
    }
}
