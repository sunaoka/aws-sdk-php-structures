<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3SnapshotAsset $S3SnapshotAsset
 * @property RedshiftDataShareAsset $RedshiftDataShareAsset
 * @property ApiGatewayApiAsset $ApiGatewayApiAsset
 * @property S3DataAccessAsset $S3DataAccessAsset
 * @property LakeFormationDataPermissionAsset $LakeFormationDataPermissionAsset
 */
class AssetDetails extends Shape
{
    /**
     * @param array{
     *     S3SnapshotAsset?: S3SnapshotAsset,
     *     RedshiftDataShareAsset?: RedshiftDataShareAsset,
     *     ApiGatewayApiAsset?: ApiGatewayApiAsset,
     *     S3DataAccessAsset?: S3DataAccessAsset,
     *     LakeFormationDataPermissionAsset?: LakeFormationDataPermissionAsset
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
