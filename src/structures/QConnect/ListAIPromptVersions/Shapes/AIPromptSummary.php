<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPromptVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $aiPromptId
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION' $type
 * @property string $aiPromptArn
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property 'TEXT' $templateType
 * @property string $modelId
 * @property 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS' $apiFormat
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 * @property string|null $description
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 * @property array<string, string>|null $tags
 */
class AIPromptSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     assistantId: string,
     *     assistantArn: string,
     *     aiPromptId: string,
     *     type: 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION',
     *     aiPromptArn: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     templateType: 'TEXT',
     *     modelId: string,
     *     apiFormat: 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS'|'MESSAGES'|'TEXT_COMPLETIONS',
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     origin?: 'SYSTEM'|'CUSTOMER'|null,
     *     description?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
