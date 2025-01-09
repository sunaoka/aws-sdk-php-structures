<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetModelId
 * @property string $assetModelExternalId
 * @property bool $includeOffspring
 * @property bool $includeAssets
 */
class FilterByAssetModel extends Shape
{
    /**
     * @param array{
     *     assetModelId?: string,
     *     assetModelExternalId?: string,
     *     includeOffspring?: bool,
     *     includeAssets?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
