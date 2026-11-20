<?php

namespace Sunaoka\Aws\Structures\Polly\CreateVoice;

trait CreateVoiceTrait
{
    /**
     * @param CreateVoiceRequest $args
     * @return CreateVoiceResponse
     */
    public function createVoice(CreateVoiceRequest $args)
    {
        $result = parent::createVoice($args->toArray());
        return new CreateVoiceResponse($result->toArray());
    }
}
