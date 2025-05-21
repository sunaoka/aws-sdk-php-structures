<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessRequestId
 */
class GetAccessTokenRequest extends Request
{
    /**
     * @param array{AccessRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
