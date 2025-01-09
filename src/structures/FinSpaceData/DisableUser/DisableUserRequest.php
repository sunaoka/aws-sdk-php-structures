<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DisableUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 * @property string $clientToken
 */
class DisableUserRequest extends Request
{
    /**
     * @param array{
     *     userId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
