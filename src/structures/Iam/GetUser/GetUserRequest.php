<?php

namespace Sunaoka\Aws\Structures\Iam\GetUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 */
class GetUserRequest extends Request
{
    /**
     * @param array{UserName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
