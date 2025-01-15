<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'productCodes'|'createVolumePermission'|null $Attribute
 * @property Shapes\CreateVolumePermissionModifications|null $CreateVolumePermission
 * @property list<string>|null $GroupNames
 * @property 'add'|'remove'|null $OperationType
 * @property string $SnapshotId
 * @property list<string>|null $UserIds
 * @property bool|null $DryRun
 */
class ModifySnapshotAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute?: 'productCodes'|'createVolumePermission'|null,
     *     CreateVolumePermission?: Shapes\CreateVolumePermissionModifications|null,
     *     GroupNames?: list<string>|null,
     *     OperationType?: 'add'|'remove'|null,
     *     SnapshotId: string,
     *     UserIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
