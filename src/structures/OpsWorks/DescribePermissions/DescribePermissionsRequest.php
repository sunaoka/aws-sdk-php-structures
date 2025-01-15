<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IamUserArn
 * @property string|null $StackId
 */
class DescribePermissionsRequest extends Request
{
    /**
     * @param array{
     *     IamUserArn?: string|null,
     *     StackId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
