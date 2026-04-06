<?php

namespace Sunaoka\Aws\Structures\QConnect\RemoveAssistantAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE' $aiAgentType
 * @property string $assistantId
 */
class RemoveAssistantAIAgentRequest extends Request
{
    /**
     * @param array{
     *     aiAgentType: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE',
     *     assistantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
