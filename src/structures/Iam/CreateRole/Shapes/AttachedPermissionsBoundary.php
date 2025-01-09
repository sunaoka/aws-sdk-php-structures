<?php

namespace Sunaoka\Aws\Structures\Iam\CreateRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PermissionsBoundaryPolicy' $PermissionsBoundaryType
 * @property string $PermissionsBoundaryArn
 */
class AttachedPermissionsBoundary extends Shape
{
    /**
     * @param array{
     *     PermissionsBoundaryType?: 'PermissionsBoundaryPolicy',
     *     PermissionsBoundaryArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
