<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $successCodes
 * @property list<int>|null $failureCodes
 */
class WafResponseInspection extends Shape
{
    /**
     * @param array{
     *     successCodes?: list<int>|null,
     *     failureCodes?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
