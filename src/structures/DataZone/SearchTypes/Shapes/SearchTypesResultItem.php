<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetTypeItem|null $assetTypeItem
 * @property FormTypeData|null $formTypeItem
 * @property LineageNodeTypeItem|null $lineageNodeTypeItem
 */
class SearchTypesResultItem extends Shape
{
    /**
     * @param array{
     *     assetTypeItem?: AssetTypeItem|null,
     *     formTypeItem?: FormTypeData|null,
     *     lineageNodeTypeItem?: LineageNodeTypeItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
