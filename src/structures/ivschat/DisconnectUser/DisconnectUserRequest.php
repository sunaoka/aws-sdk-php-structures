<?php

namespace Sunaoka\Aws\Structures\ivschat\DisconnectUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $reason
 * @property string $roomIdentifier
 * @property string $userId
 */
class DisconnectUserRequest extends Request
{
    /**
     * @param array{
     *     reason?: string|null,
     *     roomIdentifier: string,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
