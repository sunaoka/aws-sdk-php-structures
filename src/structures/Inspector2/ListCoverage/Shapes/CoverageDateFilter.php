<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endInclusive
 * @property \Aws\Api\DateTimeResult|null $startInclusive
 */
class CoverageDateFilter extends Shape
{
    /**
     * @param array{
     *     endInclusive?: \Aws\Api\DateTimeResult|null,
     *     startInclusive?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
