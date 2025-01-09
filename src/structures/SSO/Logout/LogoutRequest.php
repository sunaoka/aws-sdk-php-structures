<?php

namespace Sunaoka\Aws\Structures\SSO\Logout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessToken
 */
class LogoutRequest extends Request
{
    /**
     * @param array{accessToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
