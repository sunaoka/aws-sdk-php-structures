<?php

namespace Sunaoka\Aws\Structures\SesV2\BatchGetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'INTERNAL_FAILURE'|'ACCESS_DENIED'|null $Code
 * @property string|null $Message
 */
class MetricDataError extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Code?: 'INTERNAL_FAILURE'|'ACCESS_DENIED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
