<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Start
 * @property string|null $End
 * @property DateRange|null $DateRange
 */
class DateFilter extends Shape
{
    /**
     * @param array{
     *     Start?: string|null,
     *     End?: string|null,
     *     DateRange?: DateRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
