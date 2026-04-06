<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DeleteAgent> $deleteAgents
 */
class BatchDeleteAgentsRequest extends Request
{
    /**
     * @param array{deleteAgents: list<Shapes\DeleteAgent>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
