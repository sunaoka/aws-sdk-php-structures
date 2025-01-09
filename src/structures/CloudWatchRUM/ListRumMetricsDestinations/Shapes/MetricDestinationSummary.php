<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListRumMetricsDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string $DestinationArn
 * @property string $IamRoleArn
 */
class MetricDestinationSummary extends Shape
{
    /**
     * @param array{
     *     Destination?: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string,
     *     IamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
