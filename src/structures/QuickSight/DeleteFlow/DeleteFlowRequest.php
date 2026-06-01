<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FlowId
 */
class DeleteFlowRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FlowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
