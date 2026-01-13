<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlossaryItem|null $glossaryItem
 * @property GlossaryTermItem|null $glossaryTermItem
 * @property AssetItem|null $assetItem
 * @property DataProductResultItem|null $dataProductItem
 */
class SearchInventoryResultItem extends Shape
{
    /**
     * @param array{
     *     glossaryItem?: GlossaryItem|null,
     *     glossaryTermItem?: GlossaryTermItem|null,
     *     assetItem?: AssetItem|null,
     *     dataProductItem?: DataProductResultItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
