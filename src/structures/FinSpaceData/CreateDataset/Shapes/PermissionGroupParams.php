<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $permissionGroupId
 * @property list<ResourcePermission> $datasetPermissions
 */
class PermissionGroupParams extends Shape
{
    /**
     * @param array{
     *     permissionGroupId?: string,
     *     datasetPermissions?: list<ResourcePermission>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
