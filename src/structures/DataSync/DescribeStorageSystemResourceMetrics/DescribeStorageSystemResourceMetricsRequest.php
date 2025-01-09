<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 * @property 'SVM'|'VOLUME'|'CLUSTER' $ResourceType
 * @property string $ResourceId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeStorageSystemResourceMetricsRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryJobArn: string,
     *     ResourceType: 'SVM'|'VOLUME'|'CLUSTER',
     *     ResourceId: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
