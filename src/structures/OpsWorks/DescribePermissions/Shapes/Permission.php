<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackId
 * @property string|null $IamUserArn
 * @property bool|null $AllowSsh
 * @property bool|null $AllowSudo
 * @property string|null $Level
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     IamUserArn?: string|null,
     *     AllowSsh?: bool|null,
     *     AllowSudo?: bool|null,
     *     Level?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
