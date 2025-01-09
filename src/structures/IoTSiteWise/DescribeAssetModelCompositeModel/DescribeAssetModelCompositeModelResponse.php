<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string $assetModelCompositeModelExternalId
 * @property list<Shapes\AssetModelCompositeModelPathSegment> $assetModelCompositeModelPath
 * @property string $assetModelCompositeModelName
 * @property string $assetModelCompositeModelDescription
 * @property string $assetModelCompositeModelType
 * @property list<Shapes\AssetModelProperty> $assetModelCompositeModelProperties
 * @property Shapes\CompositionDetails $compositionDetails
 * @property list<Shapes\AssetModelCompositeModelSummary> $assetModelCompositeModelSummaries
 * @property list<Shapes\ActionDefinition> $actionDefinitions
 */
class DescribeAssetModelCompositeModelResponse extends Response
{
}
