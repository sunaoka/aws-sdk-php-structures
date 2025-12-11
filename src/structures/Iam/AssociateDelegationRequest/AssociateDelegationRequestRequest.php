<?php

namespace Sunaoka\Aws\Structures\Iam\AssociateDelegationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DelegationRequestId
 */
class AssociateDelegationRequestRequest extends Request
{
    /**
     * @param array{DelegationRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
