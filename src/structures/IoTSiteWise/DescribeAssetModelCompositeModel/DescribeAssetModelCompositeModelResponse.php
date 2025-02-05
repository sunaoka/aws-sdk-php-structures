<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string|null $assetModelCompositeModelExternalId
 * @property list<Shapes\AssetModelCompositeModelPathSegment> $assetModelCompositeModelPath
 * @property string $assetModelCompositeModelName
 * @property string $assetModelCompositeModelDescription
 * @property string $assetModelCompositeModelType
 * @property list<Shapes\AssetModelProperty> $assetModelCompositeModelProperties
 * @property Shapes\CompositionDetails|null $compositionDetails
 * @property list<Shapes\AssetModelCompositeModelSummary> $assetModelCompositeModelSummaries
 * @property list<Shapes\ActionDefinition>|null $actionDefinitions
 */
class DescribeAssetModelCompositeModelResponse extends Response
{
}
