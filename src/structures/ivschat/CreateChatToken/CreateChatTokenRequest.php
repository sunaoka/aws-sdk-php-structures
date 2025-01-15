<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateChatToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roomIdentifier
 * @property string $userId
 * @property list<'SEND_MESSAGE'|'DISCONNECT_USER'|'DELETE_MESSAGE'>|null $capabilities
 * @property int<1, 180>|null $sessionDurationInMinutes
 * @property array<string, string>|null $attributes
 */
class CreateChatTokenRequest extends Request
{
    /**
     * @param array{
     *     roomIdentifier: string,
     *     userId: string,
     *     capabilities?: list<'SEND_MESSAGE'|'DISCONNECT_USER'|'DELETE_MESSAGE'>|null,
     *     sessionDurationInMinutes?: int<1, 180>|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
