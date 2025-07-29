<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetId
 * @property string|null $assetExternalId
 * @property string $assetName
 * @property string $assetModelId
 * @property Shapes\Property|null $assetProperty
 * @property Shapes\CompositeModelProperty|null $compositeModel
 */
class DescribeAssetPropertyResponse extends Response
{
}
