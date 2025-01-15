<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LakeFormationDataPermissionDetails $LakeFormationDataPermissionDetails
 * @property 'LFTagPolicy' $LakeFormationDataPermissionType
 * @property list<'DESCRIBE'|'SELECT'> $Permissions
 * @property string|null $RoleArn
 */
class LakeFormationDataPermissionAsset extends Shape
{
    /**
     * @param array{
     *     LakeFormationDataPermissionDetails: LakeFormationDataPermissionDetails,
     *     LakeFormationDataPermissionType: 'LFTagPolicy',
     *     Permissions: list<'DESCRIBE'|'SELECT'>,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
