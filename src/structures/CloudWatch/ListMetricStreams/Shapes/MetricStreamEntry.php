<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetricStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastUpdateDate
 * @property string $Name
 * @property string $FirehoseArn
 * @property string $State
 * @property 'json'|'opentelemetry0.7'|'opentelemetry1.0' $OutputFormat
 */
class MetricStreamEntry extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     LastUpdateDate?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     FirehoseArn?: string,
     *     State?: string,
     *     OutputFormat?: 'json'|'opentelemetry0.7'|'opentelemetry1.0'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
