<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, SemanticTable>|null $TableMap
 */
class SemanticModelConfiguration extends Shape
{
    /**
     * @param array{TableMap?: array<string, SemanticTable>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
