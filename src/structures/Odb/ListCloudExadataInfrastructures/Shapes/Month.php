<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudExadataInfrastructures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER'|null $name
 */
class Month extends Shape
{
    /**
     * @param array{name?: 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
