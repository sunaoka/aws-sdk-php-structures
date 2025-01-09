<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchDeleteRumMetricDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string $DestinationArn
 * @property list<string> $MetricDefinitionIds
 */
class BatchDeleteRumMetricDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     Destination: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string,
     *     MetricDefinitionIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
