<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListHarvestJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED' $Status
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListHarvestJobsRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName?: string,
     *     OriginEndpointName?: string,
     *     Status?: 'QUEUED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
