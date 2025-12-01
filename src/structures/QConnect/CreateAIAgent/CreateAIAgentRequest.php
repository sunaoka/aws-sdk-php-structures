<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $name
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION' $type
 * @property Shapes\AIAgentConfiguration $configuration
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property array<string, string>|null $tags
 * @property string|null $description
 */
class CreateAIAgentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     name: string,
     *     type: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION',
     *     configuration: Shapes\AIAgentConfiguration,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     tags?: array<string, string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
