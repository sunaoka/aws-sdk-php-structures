<?php

namespace Sunaoka\Aws\Structures\EKS\ListNodegroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property int $maxResults
 * @property string $nextToken
 */
class ListNodegroupsRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
