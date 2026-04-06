<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListCustomPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CustomPermissionsName
 * @property Capabilities|null $Capabilities
 */
class CustomPermissions extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CustomPermissionsName?: string|null,
     *     Capabilities?: Capabilities|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
