<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UnaggregatedField>|null $Values
 */
class TableUnaggregatedFieldWells extends Shape
{
    /**
     * @param array{Values?: list<UnaggregatedField>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
