<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListScheduleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NamePrefix
 * @property string $NextToken
 */
class ListScheduleGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NamePrefix?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
