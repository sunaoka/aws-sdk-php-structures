<?php

namespace Sunaoka\Aws\Structures\VoiceID\OptOutSpeaker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $SpeakerId
 */
class OptOutSpeakerRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     SpeakerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
