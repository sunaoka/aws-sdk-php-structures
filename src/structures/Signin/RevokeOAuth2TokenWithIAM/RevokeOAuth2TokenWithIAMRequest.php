<?php

namespace Sunaoka\Aws\Structures\Signin\RevokeOAuth2TokenWithIAM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $token
 */
class RevokeOAuth2TokenWithIAMRequest extends Request
{
    /**
     * @param array{token: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
