<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetId
 * @property string $assetArn
 * @property string $assetName
 * @property string $assetModelId
 * @property list<Shapes\AssetProperty> $assetProperties
 * @property list<Shapes\AssetHierarchy> $assetHierarchies
 * @property list<Shapes\AssetCompositeModel> $assetCompositeModels
 * @property \Aws\Api\DateTimeResult $assetCreationDate
 * @property \Aws\Api\DateTimeResult $assetLastUpdateDate
 * @property Shapes\AssetStatus $assetStatus
 * @property string $assetDescription
 * @property list<Shapes\AssetCompositeModelSummary> $assetCompositeModelSummaries
 * @property string $assetExternalId
 */
class DescribeAssetResponse extends Response
{
}
