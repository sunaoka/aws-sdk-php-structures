<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CancelParticipantAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string $ConnectionToken
 */
class CancelParticipantAuthenticationRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
