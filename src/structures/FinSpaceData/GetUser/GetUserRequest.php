<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 */
class GetUserRequest extends Request
{
    /**
     * @param array{userId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
