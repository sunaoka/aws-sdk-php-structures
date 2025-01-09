<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetDataSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION' $AssetType
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property string $Id
 * @property string $Name
 * @property 'OWNED'|'ENTITLED' $Origin
 * @property Shapes\OriginDetails $OriginDetails
 * @property string $SourceId
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class GetDataSetResponse extends Response
{
}
