<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assetModelId
 * @property string|null $assetModelExternalId
 * @property bool|null $includeOffspring
 * @property bool|null $includeAssets
 */
class FilterByAssetModel extends Shape
{
    /**
     * @param array{
     *     assetModelId?: string|null,
     *     assetModelExternalId?: string|null,
     *     includeOffspring?: bool|null,
     *     includeAssets?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
