<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter\Shapes;

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
