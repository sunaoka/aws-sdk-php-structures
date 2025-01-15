<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $thingTypeName
 */
class ListThingTypesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     thingTypeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
