<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $IamUserArn
 * @property bool $AllowSsh
 * @property bool $AllowSudo
 * @property string $Level
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     StackId?: string,
     *     IamUserArn?: string,
     *     AllowSsh?: bool,
     *     AllowSudo?: bool,
     *     Level?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
