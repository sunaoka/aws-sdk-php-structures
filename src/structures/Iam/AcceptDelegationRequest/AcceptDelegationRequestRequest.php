<?php

namespace Sunaoka\Aws\Structures\Iam\AcceptDelegationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DelegationRequestId
 */
class AcceptDelegationRequestRequest extends Request
{
    /**
     * @param array{DelegationRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
