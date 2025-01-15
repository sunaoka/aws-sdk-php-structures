<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateDataSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION'|null $AssetType
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property string|null $Id
 * @property string|null $Name
 * @property 'OWNED'|'ENTITLED'|null $Origin
 * @property Shapes\OriginDetails|null $OriginDetails
 * @property string|null $SourceId
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class UpdateDataSetResponse extends Response
{
}
