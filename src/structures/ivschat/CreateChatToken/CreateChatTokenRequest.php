<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateChatToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roomIdentifier
 * @property string $userId
 * @property list<'SEND_MESSAGE'|'DISCONNECT_USER'|'DELETE_MESSAGE'> $capabilities
 * @property int<1, 180> $sessionDurationInMinutes
 * @property array<string, string> $attributes
 */
class CreateChatTokenRequest extends Request
{
    /**
     * @param array{
     *     roomIdentifier: string,
     *     userId: string,
     *     capabilities?: list<'SEND_MESSAGE'|'DISCONNECT_USER'|'DELETE_MESSAGE'>,
     *     sessionDurationInMinutes?: int<1, 180>,
     *     attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
