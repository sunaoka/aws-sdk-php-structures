<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListNamedShadowsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string|null $nextToken
 * @property int<1, 100>|null $pageSize
 */
class ListNamedShadowsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     nextToken?: string|null,
     *     pageSize?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
