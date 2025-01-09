<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property list<AssetPropertyValue> $assetPropertyValueHistory
 */
class BatchGetAssetPropertyValueHistorySuccessEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetPropertyValueHistory: list<AssetPropertyValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
