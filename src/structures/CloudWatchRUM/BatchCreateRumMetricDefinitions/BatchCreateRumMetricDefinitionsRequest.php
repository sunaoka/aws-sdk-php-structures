<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchCreateRumMetricDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string $DestinationArn
 * @property list<Shapes\MetricDefinitionRequest> $MetricDefinitions
 */
class BatchCreateRumMetricDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     Destination: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string,
     *     MetricDefinitions: list<Shapes\MetricDefinitionRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
