<?php

namespace Sunaoka\Aws\Structures\VoiceID\DeleteSpeaker;

trait DeleteSpeakerTrait
{
    /**
     * @param DeleteSpeakerRequest $args
     * @return void
     */
    public function deleteSpeaker(DeleteSpeakerRequest $args)
    {
        parent::deleteSpeaker($args->toArray());
    }
}
