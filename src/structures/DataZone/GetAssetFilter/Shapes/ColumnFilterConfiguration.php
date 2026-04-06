<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $includedColumnNames
 */
class ColumnFilterConfiguration extends Shape
{
    /**
     * @param array{includedColumnNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
