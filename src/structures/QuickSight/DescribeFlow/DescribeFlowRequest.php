<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FlowId
 * @property 'PUBLISHED'|'DRAFT'|'PENDING_APPROVAL' $PublishState
 */
class DescribeFlowRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FlowId: string,
     *     PublishState: 'PUBLISHED'|'DRAFT'|'PENDING_APPROVAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
