<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\DisconnectParticipant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ConnectionToken
 */
class DisconnectParticipantRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
