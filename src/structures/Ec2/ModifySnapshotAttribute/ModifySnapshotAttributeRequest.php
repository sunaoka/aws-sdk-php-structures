<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'productCodes'|'createVolumePermission' $Attribute
 * @property Shapes\CreateVolumePermissionModifications $CreateVolumePermission
 * @property list<string> $GroupNames
 * @property 'add'|'remove' $OperationType
 * @property string $SnapshotId
 * @property list<string> $UserIds
 * @property bool $DryRun
 */
class ModifySnapshotAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute?: 'productCodes'|'createVolumePermission',
     *     CreateVolumePermission?: Shapes\CreateVolumePermissionModifications,
     *     GroupNames?: list<string>,
     *     OperationType?: 'add'|'remove',
     *     SnapshotId: string,
     *     UserIds?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
