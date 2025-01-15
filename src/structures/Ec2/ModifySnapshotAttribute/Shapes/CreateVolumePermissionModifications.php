<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CreateVolumePermission>|null $Add
 * @property list<CreateVolumePermission>|null $Remove
 */
class CreateVolumePermissionModifications extends Shape
{
    /**
     * @param array{
     *     Add?: list<CreateVolumePermission>|null,
     *     Remove?: list<CreateVolumePermission>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
