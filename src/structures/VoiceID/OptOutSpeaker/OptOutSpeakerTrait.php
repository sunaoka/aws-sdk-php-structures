<?php

namespace Sunaoka\Aws\Structures\VoiceID\OptOutSpeaker;

trait OptOutSpeakerTrait
{
    /**
     * @param OptOutSpeakerRequest $args
     * @return OptOutSpeakerResponse
     */
    public function optOutSpeaker(OptOutSpeakerRequest $args)
    {
        $result = parent::optOutSpeaker($args->toArray());
        return new OptOutSpeakerResponse($result->toArray());
    }
}
