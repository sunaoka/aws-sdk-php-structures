<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assetId
 * @property string|null $assetExternalId
 * @property bool|null $includeOffspring
 * @property bool|null $includeAssetModel
 */
class FilterByAsset extends Shape
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     assetExternalId?: string|null,
     *     includeOffspring?: bool|null,
     *     includeAssetModel?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
