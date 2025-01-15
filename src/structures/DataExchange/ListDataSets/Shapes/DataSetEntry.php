<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION' $AssetType
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property string $Id
 * @property string $Name
 * @property 'OWNED'|'ENTITLED' $Origin
 * @property OriginDetails|null $OriginDetails
 * @property string|null $SourceId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class DataSetEntry extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     AssetType: 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Description: string,
     *     Id: string,
     *     Name: string,
     *     Origin: 'OWNED'|'ENTITLED',
     *     OriginDetails?: OriginDetails|null,
     *     SourceId?: string|null,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
