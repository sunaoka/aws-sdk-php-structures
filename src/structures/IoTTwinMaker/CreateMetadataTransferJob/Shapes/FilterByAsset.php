<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $assetExternalId
 * @property bool $includeOffspring
 * @property bool $includeAssetModel
 */
class FilterByAsset extends Shape
{
    /**
     * @param array{
     *     assetId?: string,
     *     assetExternalId?: string,
     *     includeOffspring?: bool,
     *     includeAssetModel?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
