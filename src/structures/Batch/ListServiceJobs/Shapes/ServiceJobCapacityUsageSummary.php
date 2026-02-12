<?php

namespace Sunaoka\Aws\Structures\Batch\ListServiceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $capacityUnit
 * @property double|null $quantity
 */
class ServiceJobCapacityUsageSummary extends Shape
{
    /**
     * @param array{
     *     capacityUnit?: string|null,
     *     quantity?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
