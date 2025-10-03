<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $aiPromptId
 * @property string $aiPromptArn
 * @property string $name
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION' $type
 * @property 'TEXT' $templateType
 * @property string $modelId
 * @property 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS' $apiFormat
 * @property AIPromptTemplateConfiguration $templateConfiguration
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string|null $description
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property array<string, string>|null $tags
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 */
class AIPromptData extends Shape
{
    /**
     * @param array{
     *     assistantId: string,
     *     assistantArn: string,
     *     aiPromptId: string,
     *     aiPromptArn: string,
     *     name: string,
     *     type: 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION',
     *     templateType: 'TEXT',
     *     modelId: string,
     *     apiFormat: 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS',
     *     templateConfiguration: AIPromptTemplateConfiguration,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     tags?: array<string, string>|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
