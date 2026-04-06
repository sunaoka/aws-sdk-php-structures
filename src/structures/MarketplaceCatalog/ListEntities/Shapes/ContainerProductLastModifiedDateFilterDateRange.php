<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AfterValue
 * @property string|null $BeforeValue
 */
class ContainerProductLastModifiedDateFilterDateRange extends Shape
{
    /**
     * @param array{
     *     AfterValue?: string|null,
     *     BeforeValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
