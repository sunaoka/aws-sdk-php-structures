<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property Shapes\AssetDetails|null $AssetDetails
 * @property 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION'|null $AssetType
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DataSetId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $RevisionId
 * @property string|null $SourceId
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetAssetResponse extends Response
{
}
