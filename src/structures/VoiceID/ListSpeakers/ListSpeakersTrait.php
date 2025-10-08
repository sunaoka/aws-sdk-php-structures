<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakers;

trait ListSpeakersTrait
{
    /**
     * @param ListSpeakersRequest $args
     * @return ListSpeakersResponse
     */
    public function listSpeakers(ListSpeakersRequest $args)
    {
        $result = parent::listSpeakers($args->toArray());
        return new ListSpeakersResponse($result->toArray());
    }
}
