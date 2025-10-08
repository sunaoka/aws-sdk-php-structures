<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeSpeaker;

trait DescribeSpeakerTrait
{
    /**
     * @param DescribeSpeakerRequest $args
     * @return DescribeSpeakerResponse
     */
    public function describeSpeaker(DescribeSpeakerRequest $args)
    {
        $result = parent::describeSpeaker($args->toArray());
        return new DescribeSpeakerResponse($result->toArray());
    }
}
