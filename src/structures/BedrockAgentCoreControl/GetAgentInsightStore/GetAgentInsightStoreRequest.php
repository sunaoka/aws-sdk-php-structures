<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentInsightStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentInsightStoreId
 */
class GetAgentInsightStoreRequest extends Request
{
    /**
     * @param array{agentInsightStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
