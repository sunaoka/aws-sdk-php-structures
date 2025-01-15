<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingsInThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property bool|null $recursive
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListThingsInThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     recursive?: bool|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
