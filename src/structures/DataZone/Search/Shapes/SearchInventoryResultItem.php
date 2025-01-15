<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetItem|null $assetItem
 * @property DataProductResultItem|null $dataProductItem
 * @property GlossaryItem|null $glossaryItem
 * @property GlossaryTermItem|null $glossaryTermItem
 */
class SearchInventoryResultItem extends Shape
{
    /**
     * @param array{
     *     assetItem?: AssetItem|null,
     *     dataProductItem?: DataProductResultItem|null,
     *     glossaryItem?: GlossaryItem|null,
     *     glossaryTermItem?: GlossaryTermItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
