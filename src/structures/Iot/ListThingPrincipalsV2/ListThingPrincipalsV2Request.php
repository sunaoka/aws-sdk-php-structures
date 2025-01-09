<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingPrincipalsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $thingName
 * @property 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING' $thingPrincipalType
 */
class ListThingPrincipalsV2Request extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     thingName: string,
     *     thingPrincipalType?: 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
