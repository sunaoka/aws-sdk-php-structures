<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetricStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastUpdateDate
 * @property string|null $Name
 * @property string|null $FirehoseArn
 * @property string|null $State
 * @property 'json'|'opentelemetry0.7'|'opentelemetry1.0'|null $OutputFormat
 */
class MetricStreamEntry extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateDate?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     FirehoseArn?: string|null,
     *     State?: string|null,
     *     OutputFormat?: 'json'|'opentelemetry0.7'|'opentelemetry1.0'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
