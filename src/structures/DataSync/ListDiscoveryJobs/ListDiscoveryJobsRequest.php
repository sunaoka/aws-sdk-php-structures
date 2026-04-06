<?php

namespace Sunaoka\Aws\Structures\DataSync\ListDiscoveryJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StorageSystemArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDiscoveryJobsRequest extends Request
{
    /**
     * @param array{
     *     StorageSystemArn?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
