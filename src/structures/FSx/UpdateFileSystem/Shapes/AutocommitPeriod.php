<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'NONE' $Type
 * @property int<1, 65535> $Value
 */
class AutocommitPeriod extends Shape
{
    /**
     * @param array{
     *     Type: 'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'NONE',
     *     Value?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
