<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property Shapes\AssetDetails $AssetDetails
 * @property 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION' $AssetType
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DataSetId
 * @property string $Id
 * @property string $Name
 * @property string $RevisionId
 * @property string $SourceId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class UpdateAssetResponse extends Response
{
}
