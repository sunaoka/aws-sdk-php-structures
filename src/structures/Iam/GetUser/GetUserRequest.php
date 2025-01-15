<?php

namespace Sunaoka\Aws\Structures\Iam\GetUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 */
class GetUserRequest extends Request
{
    /**
     * @param array{UserName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
