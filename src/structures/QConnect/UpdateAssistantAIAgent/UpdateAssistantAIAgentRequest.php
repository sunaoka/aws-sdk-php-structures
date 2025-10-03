<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAssistantAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER' $aiAgentType
 * @property Shapes\AIAgentConfigurationData $configuration
 */
class UpdateAssistantAIAgentRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiAgentType: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER',
     *     configuration: Shapes\AIAgentConfigurationData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
