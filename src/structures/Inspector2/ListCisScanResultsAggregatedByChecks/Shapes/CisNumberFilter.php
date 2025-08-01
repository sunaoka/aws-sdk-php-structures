<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $upperInclusive
 * @property int|null $lowerInclusive
 */
class CisNumberFilter extends Shape
{
    /**
     * @param array{
     *     upperInclusive?: int|null,
     *     lowerInclusive?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
