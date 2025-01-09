<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetTypeItem $assetTypeItem
 * @property FormTypeData $formTypeItem
 * @property LineageNodeTypeItem $lineageNodeTypeItem
 */
class SearchTypesResultItem extends Shape
{
    /**
     * @param array{
     *     assetTypeItem?: AssetTypeItem,
     *     formTypeItem?: FormTypeData,
     *     lineageNodeTypeItem?: LineageNodeTypeItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
