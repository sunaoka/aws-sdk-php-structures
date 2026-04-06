<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxScalingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property int<0, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListKxScalingGroupsRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     maxResults?: int<0, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
