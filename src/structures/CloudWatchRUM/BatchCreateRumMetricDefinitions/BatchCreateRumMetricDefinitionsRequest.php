<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchCreateRumMetricDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string|null $DestinationArn
 * @property list<Shapes\MetricDefinitionRequest> $MetricDefinitions
 */
class BatchCreateRumMetricDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     Destination: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string|null,
     *     MetricDefinitions: list<Shapes\MetricDefinitionRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
