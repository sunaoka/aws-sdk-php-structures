<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $lowerInclusive
 * @property int|null $upperInclusive
 */
class CoverageNumberFilter extends Shape
{
    /**
     * @param array{
     *     lowerInclusive?: int|null,
     *     upperInclusive?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
