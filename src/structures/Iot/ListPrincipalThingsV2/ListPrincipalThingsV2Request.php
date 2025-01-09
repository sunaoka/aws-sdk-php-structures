<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalThingsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $principal
 * @property 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING' $thingPrincipalType
 */
class ListPrincipalThingsV2Request extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     principal: string,
     *     thingPrincipalType?: 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
