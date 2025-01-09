<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'WEBSOCKET'|'CONNECTION_CREDENTIALS'> $Type
 * @property string $ParticipantToken
 * @property bool $ConnectParticipant
 */
class CreateParticipantConnectionRequest extends Request
{
    /**
     * @param array{
     *     Type?: list<'WEBSOCKET'|'CONNECTION_CREDENTIALS'>,
     *     ParticipantToken: string,
     *     ConnectParticipant?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
