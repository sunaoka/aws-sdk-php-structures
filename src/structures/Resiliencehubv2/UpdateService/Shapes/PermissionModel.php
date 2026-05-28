<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invokerRoleName
 * @property list<CrossAccountRole>|null $crossAccountRoles
 */
class PermissionModel extends Shape
{
    /**
     * @param array{
     *     invokerRoleName: string,
     *     crossAccountRoles?: list<CrossAccountRole>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
