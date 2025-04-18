<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $name
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION' $type
 * @property Shapes\AIPromptTemplateConfiguration $templateConfiguration
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property 'TEXT' $templateType
 * @property string $modelId
 * @property 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS' $apiFormat
 * @property array<string, string>|null $tags
 * @property string|null $description
 */
class CreateAIPromptRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     name: string,
     *     type: 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION',
     *     templateConfiguration: Shapes\AIPromptTemplateConfiguration,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     templateType: 'TEXT',
     *     modelId: string,
     *     apiFormat: 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS',
     *     tags?: array<string, string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
