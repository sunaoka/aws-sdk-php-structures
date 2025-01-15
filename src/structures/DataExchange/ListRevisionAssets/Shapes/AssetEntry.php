<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property AssetDetails $AssetDetails
 * @property 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION' $AssetType
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DataSetId
 * @property string $Id
 * @property string $Name
 * @property string $RevisionId
 * @property string|null $SourceId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class AssetEntry extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     AssetDetails: AssetDetails,
     *     AssetType: 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     DataSetId: string,
     *     Id: string,
     *     Name: string,
     *     RevisionId: string,
     *     SourceId?: string|null,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
