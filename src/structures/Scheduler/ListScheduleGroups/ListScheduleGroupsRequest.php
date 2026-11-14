<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListScheduleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListScheduleGroupsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
