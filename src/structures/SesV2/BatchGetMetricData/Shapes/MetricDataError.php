<?php

namespace Sunaoka\Aws\Structures\SesV2\BatchGetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'INTERNAL_FAILURE'|'ACCESS_DENIED' $Code
 * @property string $Message
 */
class MetricDataError extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Code?: 'INTERNAL_FAILURE'|'ACCESS_DENIED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
