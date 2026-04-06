<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiAgentId
 */
class GetAIAgentRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiAgentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
