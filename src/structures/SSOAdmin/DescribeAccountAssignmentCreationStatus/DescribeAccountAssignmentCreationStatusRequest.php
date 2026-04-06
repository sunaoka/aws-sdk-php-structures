<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeAccountAssignmentCreationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $AccountAssignmentCreationRequestId
 */
class DescribeAccountAssignmentCreationStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     AccountAssignmentCreationRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
