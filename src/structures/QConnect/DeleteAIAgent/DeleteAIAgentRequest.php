<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 */
class DeleteAIAgentRequest extends Request
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
