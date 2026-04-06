<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAssistantAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION' $aiAgentType
 * @property Shapes\AIAgentConfigurationData $configuration
 * @property string|null $orchestratorUseCase
 */
class UpdateAssistantAIAgentRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiAgentType: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION',
     *     configuration: Shapes\AIAgentConfigurationData,
     *     orchestratorUseCase?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
