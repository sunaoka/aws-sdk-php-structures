<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $CostCategoryName
 * @property string|null $CostCategoryArn
 */
class CostCategoryResourceAssociation extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     CostCategoryName?: string|null,
     *     CostCategoryArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
