<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $includedColumnNames
 */
class ColumnFilterConfiguration extends Shape
{
    /**
     * @param array{includedColumnNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
