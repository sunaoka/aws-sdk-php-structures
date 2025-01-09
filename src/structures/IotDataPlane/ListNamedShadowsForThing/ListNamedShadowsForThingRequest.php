<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListNamedShadowsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $nextToken
 * @property int $pageSize
 */
class ListNamedShadowsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     nextToken?: string,
     *     pageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
