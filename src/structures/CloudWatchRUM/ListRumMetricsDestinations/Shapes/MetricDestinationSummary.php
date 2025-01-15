<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListRumMetricsDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CloudWatch'|'Evidently'|null $Destination
 * @property string|null $DestinationArn
 * @property string|null $IamRoleArn
 */
class MetricDestinationSummary extends Shape
{
    /**
     * @param array{
     *     Destination?: 'CloudWatch'|'Evidently'|null,
     *     DestinationArn?: string|null,
     *     IamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
