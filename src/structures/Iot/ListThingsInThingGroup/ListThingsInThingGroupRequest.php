<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingsInThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property bool $recursive
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListThingsInThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     recursive?: bool,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
