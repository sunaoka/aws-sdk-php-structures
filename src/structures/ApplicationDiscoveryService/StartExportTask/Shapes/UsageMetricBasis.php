<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property double $percentageAdjust
 */
class UsageMetricBasis extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     percentageAdjust?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
