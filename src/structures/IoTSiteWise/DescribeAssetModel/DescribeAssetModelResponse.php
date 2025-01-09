<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetModelId
 * @property string $assetModelExternalId
 * @property string $assetModelArn
 * @property string $assetModelName
 * @property 'ASSET_MODEL'|'COMPONENT_MODEL' $assetModelType
 * @property string $assetModelDescription
 * @property list<Shapes\AssetModelProperty> $assetModelProperties
 * @property list<Shapes\AssetModelHierarchy> $assetModelHierarchies
 * @property list<Shapes\AssetModelCompositeModel> $assetModelCompositeModels
 * @property list<Shapes\AssetModelCompositeModelSummary> $assetModelCompositeModelSummaries
 * @property \Aws\Api\DateTimeResult $assetModelCreationDate
 * @property \Aws\Api\DateTimeResult $assetModelLastUpdateDate
 * @property Shapes\AssetModelStatus $assetModelStatus
 * @property string $assetModelVersion
 * @property string $eTag
 */
class DescribeAssetModelResponse extends Response
{
}
