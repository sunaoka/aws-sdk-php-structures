<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'WEBSOCKET'|'CONNECTION_CREDENTIALS'|'WEBRTC_CONNECTION'>|null $Type
 * @property string $ParticipantToken
 * @property bool|null $ConnectParticipant
 */
class CreateParticipantConnectionRequest extends Request
{
    /**
     * @param array{
     *     Type?: list<'WEBSOCKET'|'CONNECTION_CREDENTIALS'|'WEBRTC_CONNECTION'>|null,
     *     ParticipantToken: string,
     *     ConnectParticipant?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
