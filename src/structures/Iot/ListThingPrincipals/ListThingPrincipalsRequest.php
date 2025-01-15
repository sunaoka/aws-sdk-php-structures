<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingPrincipals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string $thingName
 */
class ListThingPrincipalsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     thingName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
