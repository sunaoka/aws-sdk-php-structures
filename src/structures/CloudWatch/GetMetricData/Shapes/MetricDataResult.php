<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Label
 * @property list<\Aws\Api\DateTimeResult> $Timestamps
 * @property list<double> $Values
 * @property 'Complete'|'InternalError'|'PartialData'|'Forbidden' $StatusCode
 * @property list<MessageData> $Messages
 */
class MetricDataResult extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Label?: string,
     *     Timestamps?: list<\Aws\Api\DateTimeResult>,
     *     Values?: list<double>,
     *     StatusCode?: 'Complete'|'InternalError'|'PartialData'|'Forbidden',
     *     Messages?: list<MessageData>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
