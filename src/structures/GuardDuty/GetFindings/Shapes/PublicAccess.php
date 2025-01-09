<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PermissionConfiguration $PermissionConfiguration
 * @property string $EffectivePermission
 */
class PublicAccess extends Shape
{
    /**
     * @param array{
     *     PermissionConfiguration?: PermissionConfiguration,
     *     EffectivePermission?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
