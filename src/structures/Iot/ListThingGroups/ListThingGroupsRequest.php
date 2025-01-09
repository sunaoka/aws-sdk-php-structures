<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $parentGroup
 * @property string $namePrefixFilter
 * @property bool $recursive
 */
class ListThingGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     parentGroup?: string,
     *     namePrefixFilter?: string,
     *     recursive?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
