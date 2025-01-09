<?php

namespace Sunaoka\Aws\Structures\ivschat\DisconnectUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roomIdentifier
 * @property string $userId
 * @property string $reason
 */
class DisconnectUserRequest extends Request
{
    /**
     * @param array{
     *     roomIdentifier: string,
     *     userId: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
