<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroupsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListThingGroupsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
