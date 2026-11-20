<?php

namespace Sunaoka\Aws\Structures\Polly\DeleteVoice;

trait DeleteVoiceTrait
{
    /**
     * @param DeleteVoiceRequest $args
     * @return DeleteVoiceResponse
     */
    public function deleteVoice(DeleteVoiceRequest $args)
    {
        $result = parent::deleteVoice($args->toArray());
        return new DeleteVoiceResponse($result->toArray());
    }
}
