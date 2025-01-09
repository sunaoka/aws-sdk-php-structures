<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetItem $assetItem
 * @property DataProductResultItem $dataProductItem
 * @property GlossaryItem $glossaryItem
 * @property GlossaryTermItem $glossaryTermItem
 */
class SearchInventoryResultItem extends Shape
{
    /**
     * @param array{
     *     assetItem?: AssetItem,
     *     dataProductItem?: DataProductResultItem,
     *     glossaryItem?: GlossaryItem,
     *     glossaryTermItem?: GlossaryTermItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
