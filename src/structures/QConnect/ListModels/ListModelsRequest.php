<?php

namespace Sunaoka\Aws\Structures\QConnect\ListModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'|null $aiPromptType
 * @property 'ACTIVE'|'LEGACY'|null $modelLifecycle
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListModelsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiPromptType?: 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'|null,
     *     modelLifecycle?: 'ACTIVE'|'LEGACY'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
