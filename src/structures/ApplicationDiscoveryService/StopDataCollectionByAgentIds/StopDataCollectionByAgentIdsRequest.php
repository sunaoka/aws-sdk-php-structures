<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StopDataCollectionByAgentIds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $agentIds
 */
class StopDataCollectionByAgentIdsRequest extends Request
{
    /**
     * @param array{agentIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
