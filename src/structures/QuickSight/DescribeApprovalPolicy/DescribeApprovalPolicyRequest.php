<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeApprovalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 */
class DescribeApprovalPolicyRequest extends Request
{
    /**
     * @param array{PolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
