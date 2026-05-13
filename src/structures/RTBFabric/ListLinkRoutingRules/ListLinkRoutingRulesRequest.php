<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinkRoutingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property string|null $nextToken
 * @property int<1, 10>|null $maxResults
 */
class ListLinkRoutingRulesRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
