<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchGetRumMetricDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string $DestinationArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class BatchGetRumMetricDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     Destination: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
