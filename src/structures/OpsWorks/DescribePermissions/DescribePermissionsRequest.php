<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IamUserArn
 * @property string $StackId
 */
class DescribePermissionsRequest extends Request
{
    /**
     * @param array{
     *     IamUserArn?: string,
     *     StackId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
