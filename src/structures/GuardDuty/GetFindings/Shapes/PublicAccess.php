<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PermissionConfiguration|null $PermissionConfiguration
 * @property string|null $EffectivePermission
 */
class PublicAccess extends Shape
{
    /**
     * @param array{
     *     PermissionConfiguration?: PermissionConfiguration|null,
     *     EffectivePermission?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
