<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAssistantAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE' $aiAgentType
 * @property string $assistantId
 * @property Shapes\AIAgentConfigurationData $configuration
 */
class UpdateAssistantAIAgentRequest extends Request
{
    /**
     * @param array{
     *     aiAgentType: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE',
     *     assistantId: string,
     *     configuration: Shapes\AIAgentConfigurationData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
