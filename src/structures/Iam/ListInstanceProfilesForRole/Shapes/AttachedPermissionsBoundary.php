<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfilesForRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PermissionsBoundaryPolicy'|null $PermissionsBoundaryType
 * @property string|null $PermissionsBoundaryArn
 */
class AttachedPermissionsBoundary extends Shape
{
    /**
     * @param array{
     *     PermissionsBoundaryType?: 'PermissionsBoundaryPolicy'|null,
     *     PermissionsBoundaryArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
