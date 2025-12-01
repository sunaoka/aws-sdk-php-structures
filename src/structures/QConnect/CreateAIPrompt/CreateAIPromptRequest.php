<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $name
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION' $type
 * @property Shapes\AIPromptTemplateConfiguration $templateConfiguration
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property 'TEXT' $templateType
 * @property string $modelId
 * @property 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS' $apiFormat
 * @property array<string, string>|null $tags
 * @property string|null $description
 * @property Shapes\AIPromptInferenceConfiguration|null $inferenceConfiguration
 */
class CreateAIPromptRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     name: string,
     *     type: 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION',
     *     templateConfiguration: Shapes\AIPromptTemplateConfiguration,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     templateType: 'TEXT',
     *     modelId: string,
     *     apiFormat: 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS',
     *     tags?: array<string, string>|null,
     *     description?: string|null,
     *     inferenceConfiguration?: Shapes\AIPromptInferenceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
