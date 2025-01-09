<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Start
 * @property string $End
 * @property DateRange $DateRange
 */
class DateFilter extends Shape
{
    /**
     * @param array{
     *     Start?: string,
     *     End?: string,
     *     DateRange?: DateRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
