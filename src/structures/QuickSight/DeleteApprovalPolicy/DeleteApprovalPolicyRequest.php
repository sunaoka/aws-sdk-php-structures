<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteApprovalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 */
class DeleteApprovalPolicyRequest extends Request
{
    /**
     * @param array{PolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
