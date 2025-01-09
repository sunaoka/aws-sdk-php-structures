<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiPromptArn
 * @property string $aiPromptId
 * @property 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS' $apiFormat
 * @property string $assistantArn
 * @property string $assistantId
 * @property string $description
 * @property string $modelId
 * @property \Aws\Api\DateTimeResult $modifiedTime
 * @property string $name
 * @property 'SYSTEM'|'CUSTOMER' $origin
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 * @property AIPromptTemplateConfiguration $templateConfiguration
 * @property 'TEXT' $templateType
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION' $type
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class AIPromptData extends Shape
{
    /**
     * @param array{
     *     aiPromptArn: string,
     *     aiPromptId: string,
     *     apiFormat: 'ANTHROPIC_CLAUDE_MESSAGES'|'ANTHROPIC_CLAUDE_TEXT_COMPLETIONS',
     *     assistantArn: string,
     *     assistantId: string,
     *     description?: string,
     *     modelId: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     origin?: 'SYSTEM'|'CUSTOMER',
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>,
     *     templateConfiguration: AIPromptTemplateConfiguration,
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
