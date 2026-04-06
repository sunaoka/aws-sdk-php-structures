<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $flowName
 * @property string|null $nextToken
 * @property int<1, 20>|null $maxResults
 */
class ListDataIntegrationFlowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     flowName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
