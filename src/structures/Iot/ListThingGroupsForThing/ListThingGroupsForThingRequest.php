<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroupsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListThingGroupsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
