<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3SnapshotAsset|null $S3SnapshotAsset
 * @property RedshiftDataShareAsset|null $RedshiftDataShareAsset
 * @property ApiGatewayApiAsset|null $ApiGatewayApiAsset
 * @property S3DataAccessAsset|null $S3DataAccessAsset
 * @property LakeFormationDataPermissionAsset|null $LakeFormationDataPermissionAsset
 */
class AssetDetails extends Shape
{
    /**
     * @param array{
     *     S3SnapshotAsset?: S3SnapshotAsset|null,
     *     RedshiftDataShareAsset?: RedshiftDataShareAsset|null,
     *     ApiGatewayApiAsset?: ApiGatewayApiAsset|null,
     *     S3DataAccessAsset?: S3DataAccessAsset|null,
     *     LakeFormationDataPermissionAsset?: LakeFormationDataPermissionAsset|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
