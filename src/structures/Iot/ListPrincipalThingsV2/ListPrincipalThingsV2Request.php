<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalThingsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string $principal
 * @property 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'|null $thingPrincipalType
 */
class ListPrincipalThingsV2Request extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     principal: string,
     *     thingPrincipalType?: 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
