<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeCustomPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CustomPermissionsName
 * @property Capabilities $Capabilities
 */
class CustomPermissions extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CustomPermissionsName?: string,
     *     Capabilities?: Capabilities
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
