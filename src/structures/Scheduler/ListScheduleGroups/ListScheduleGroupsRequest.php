<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListScheduleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NamePrefix
 * @property string|null $NextToken
 */
class ListScheduleGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NamePrefix?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
