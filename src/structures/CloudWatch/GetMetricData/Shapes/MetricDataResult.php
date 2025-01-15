<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Label
 * @property list<\Aws\Api\DateTimeResult>|null $Timestamps
 * @property list<double>|null $Values
 * @property 'Complete'|'InternalError'|'PartialData'|'Forbidden'|null $StatusCode
 * @property list<MessageData>|null $Messages
 */
class MetricDataResult extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Label?: string|null,
     *     Timestamps?: list<\Aws\Api\DateTimeResult>|null,
     *     Values?: list<double>|null,
     *     StatusCode?: 'Complete'|'InternalError'|'PartialData'|'Forbidden'|null,
     *     Messages?: list<MessageData>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
