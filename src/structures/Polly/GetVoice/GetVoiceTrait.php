<?php

namespace Sunaoka\Aws\Structures\Polly\GetVoice;

trait GetVoiceTrait
{
    /**
     * @param GetVoiceRequest $args
     * @return GetVoiceResponse
     */
    public function getVoice(GetVoiceRequest $args)
    {
        $result = parent::getVoice($args->toArray());
        return new GetVoiceResponse($result->toArray());
    }
}
