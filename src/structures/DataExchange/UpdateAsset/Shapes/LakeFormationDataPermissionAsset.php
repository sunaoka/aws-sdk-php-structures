<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LakeFormationDataPermissionDetails $LakeFormationDataPermissionDetails
 * @property 'LFTagPolicy' $LakeFormationDataPermissionType
 * @property list<'DESCRIBE'|'SELECT'> $Permissions
 * @property string $RoleArn
 */
class LakeFormationDataPermissionAsset extends Shape
{
    /**
     * @param array{
     *     LakeFormationDataPermissionDetails: LakeFormationDataPermissionDetails,
     *     LakeFormationDataPermissionType: 'LFTagPolicy',
     *     Permissions: list<'DESCRIBE'|'SELECT'>,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
