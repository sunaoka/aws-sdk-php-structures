<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CreateVolumePermission> $Add
 * @property list<CreateVolumePermission> $Remove
 */
class CreateVolumePermissionModifications extends Shape
{
    /**
     * @param array{
     *     Add?: list<CreateVolumePermission>,
     *     Remove?: list<CreateVolumePermission>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
