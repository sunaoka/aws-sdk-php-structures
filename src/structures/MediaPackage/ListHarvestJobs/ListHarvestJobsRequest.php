<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListHarvestJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IncludeChannelId
 * @property string $IncludeStatus
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListHarvestJobsRequest extends Request
{
    /**
     * @param array{
     *     IncludeChannelId?: string,
     *     IncludeStatus?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
