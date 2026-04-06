<?php

namespace Sunaoka\Aws\Structures\Iam\SendDelegationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DelegationRequestId
 */
class SendDelegationTokenRequest extends Request
{
    /**
     * @param array{DelegationRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
