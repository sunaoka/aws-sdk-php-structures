<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string|null $nextToken
 * @property int<0, 20>|null $maxResults
 */
class ListDataIntegrationFlowsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
