<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxScalingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListKxScalingGroupsRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
