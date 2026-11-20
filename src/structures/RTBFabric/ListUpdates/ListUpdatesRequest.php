<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string|null $linkId
 * @property string|null $ruleId
 * @property 'GATEWAY_CONFIG_UPDATE'|'LINK_CONFIG_UPDATE'|'LINK_FLOW_UPDATE'|'ROUTING_RULE_UPDATE'|null $type
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|null $status
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListUpdatesRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId?: string|null,
     *     ruleId?: string|null,
     *     type?: 'GATEWAY_CONFIG_UPDATE'|'LINK_CONFIG_UPDATE'|'LINK_FLOW_UPDATE'|'ROUTING_RULE_UPDATE'|null,
     *     status?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
