<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeAccountAssignmentCreationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAssignmentCreationRequestId
 * @property string $InstanceArn
 */
class DescribeAccountAssignmentCreationStatusRequest extends Request
{
    /**
     * @param array{
     *     AccountAssignmentCreationRequestId: string,
     *     InstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
