<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $parentGroup
 * @property string|null $namePrefixFilter
 * @property bool|null $recursive
 */
class ListThingGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     parentGroup?: string|null,
     *     namePrefixFilter?: string|null,
     *     recursive?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
