<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDataIntegrationFlowsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
