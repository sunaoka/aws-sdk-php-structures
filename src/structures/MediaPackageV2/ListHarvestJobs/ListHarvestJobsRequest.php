<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListHarvestJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string|null $ChannelName
 * @property string|null $OriginEndpointName
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|null $Status
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListHarvestJobsRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName?: string|null,
     *     OriginEndpointName?: string|null,
     *     Status?: 'QUEUED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
