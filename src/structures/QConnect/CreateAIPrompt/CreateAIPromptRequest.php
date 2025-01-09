<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS' $apiFormat
 * @property string $assistantId
 * @property string $clientToken
 * @property string $description
 * @property string $modelId
 * @property string $name
 * @property array<string, string> $tags
 * @property Shapes\AIPromptTemplateConfiguration $templateConfiguration
 * @property 'TEXT' $templateType
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION' $type
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class CreateAIPromptRequest extends Request
{
    /**
     * @param array{
     *     apiFormat: 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS',
     *     assistantId: string,
     *     clientToken?: string,
     *     description?: string,
     *     modelId: string,
     *     name: string,
     *     tags?: array<string, string>,
     *     templateConfiguration: Shapes\AIPromptTemplateConfiguration,
     *     templateType: 'TEXT',
     *     type: 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION',
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
