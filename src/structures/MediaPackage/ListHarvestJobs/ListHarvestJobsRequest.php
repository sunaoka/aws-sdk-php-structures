<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListHarvestJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IncludeChannelId
 * @property string|null $IncludeStatus
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListHarvestJobsRequest extends Request
{
    /**
     * @param array{
     *     IncludeChannelId?: string|null,
     *     IncludeStatus?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
