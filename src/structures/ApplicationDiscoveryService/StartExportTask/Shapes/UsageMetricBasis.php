<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property double|null $percentageAdjust
 */
class UsageMetricBasis extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     percentageAdjust?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
