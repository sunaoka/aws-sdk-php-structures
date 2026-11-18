<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'CUSTOM'|'MANAGED'>|null $Types
 */
class DescribeConformancePacksFilters extends Shape
{
    /**
     * @param array{Types?: list<'CUSTOM'|'MANAGED'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
