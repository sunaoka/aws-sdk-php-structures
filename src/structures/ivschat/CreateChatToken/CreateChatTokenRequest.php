<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateChatToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $attributes
 * @property list<'SEND_MESSAGE'|'DISCONNECT_USER'|'DELETE_MESSAGE'>|null $capabilities
 * @property string $roomIdentifier
 * @property int<1, 180>|null $sessionDurationInMinutes
 * @property string $userId
 */
class CreateChatTokenRequest extends Request
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
     *     capabilities?: list<'SEND_MESSAGE'|'DISCONNECT_USER'|'DELETE_MESSAGE'>|null,
     *     roomIdentifier: string,
     *     sessionDurationInMinutes?: int<1, 180>|null,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
