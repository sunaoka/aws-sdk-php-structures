<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UnaggregatedField> $Values
 */
class TableUnaggregatedFieldWells extends Shape
{
    /**
     * @param array{Values?: list<UnaggregatedField>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
