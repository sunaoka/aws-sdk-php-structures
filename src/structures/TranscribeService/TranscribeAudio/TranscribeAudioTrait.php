<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio;

trait TranscribeAudioTrait
{
    /**
     * @param TranscribeAudioRequest $args
     * @return TranscribeAudioResponse
     */
    public function transcribeAudio(TranscribeAudioRequest $args)
    {
        $result = parent::transcribeAudio($args->toArray());
        return new TranscribeAudioResponse($result->toArray());
    }
}
