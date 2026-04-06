<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetModelId
 * @property string $assetModelArn
 * @property string $assetModelName
 * @property string $assetModelDescription
 * @property list<Shapes\AssetModelProperty> $assetModelProperties
 * @property list<Shapes\AssetModelHierarchy> $assetModelHierarchies
 * @property list<Shapes\AssetModelCompositeModel>|null $assetModelCompositeModels
 * @property \Aws\Api\DateTimeResult $assetModelCreationDate
 * @property \Aws\Api\DateTimeResult $assetModelLastUpdateDate
 * @property Shapes\AssetModelStatus $assetModelStatus
 */
class DescribeAssetModelResponse extends Response
{
}
