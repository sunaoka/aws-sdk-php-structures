<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 */
class GetAIAgentRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     assistantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
