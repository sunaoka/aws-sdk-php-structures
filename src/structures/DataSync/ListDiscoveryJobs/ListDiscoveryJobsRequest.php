<?php

namespace Sunaoka\Aws\Structures\DataSync\ListDiscoveryJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageSystemArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDiscoveryJobsRequest extends Request
{
    /**
     * @param array{
     *     StorageSystemArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
