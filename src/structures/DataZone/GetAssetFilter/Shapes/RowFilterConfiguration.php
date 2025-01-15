<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RowFilter $rowFilter
 * @property bool|null $sensitive
 */
class RowFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     rowFilter: RowFilter,
     *     sensitive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
