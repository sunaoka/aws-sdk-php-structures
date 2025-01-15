<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $permissionGroupId
 * @property list<ResourcePermission>|null $datasetPermissions
 */
class PermissionGroupParams extends Shape
{
    /**
     * @param array{
     *     permissionGroupId?: string|null,
     *     datasetPermissions?: list<ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
