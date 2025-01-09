<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListHarvestJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IncludeChannelId
 * @property string $IncludeStatus
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListHarvestJobsRequest extends Request
{
    /**
     * @param array{
     *     IncludeChannelId?: string,
     *     IncludeStatus?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
