<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 * @property 'SVM'|'VOLUME'|'CLUSTER' $ResourceType
 * @property string $ResourceId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeStorageSystemResourceMetricsRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryJobArn: string,
     *     ResourceType: 'SVM'|'VOLUME'|'CLUSTER',
     *     ResourceId: string,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
