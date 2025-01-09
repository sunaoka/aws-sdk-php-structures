<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property AssetPropertyValue $assetPropertyValue
 */
class BatchGetAssetPropertyValueSuccessEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetPropertyValue?: AssetPropertyValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
