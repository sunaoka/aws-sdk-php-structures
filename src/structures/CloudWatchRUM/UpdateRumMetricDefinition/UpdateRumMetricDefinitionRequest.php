<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\UpdateRumMetricDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string $DestinationArn
 * @property Shapes\MetricDefinitionRequest $MetricDefinition
 * @property string $MetricDefinitionId
 */
class UpdateRumMetricDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     Destination: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string,
     *     MetricDefinition: Shapes\MetricDefinitionRequest,
     *     MetricDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
