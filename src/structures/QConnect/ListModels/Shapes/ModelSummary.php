<?php

namespace Sunaoka\Aws\Structures\QConnect\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property string $displayName
 * @property 'NONE'|'REGIONAL'|'GLOBAL'|null $crossRegionStatus
 * @property bool|null $supportsPromptCaching
 * @property list<'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'>|null $supportedAIPromptTypes
 * @property 'ACTIVE'|'LEGACY'|null $modelLifecycle
 * @property \Aws\Api\DateTimeResult|null $legacyTimestamp
 * @property \Aws\Api\DateTimeResult|null $endOfLifeTimestamp
 */
class ModelSummary extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     displayName: string,
     *     crossRegionStatus?: 'NONE'|'REGIONAL'|'GLOBAL'|null,
     *     supportsPromptCaching?: bool|null,
     *     supportedAIPromptTypes?: list<'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'>|null,
     *     modelLifecycle?: 'ACTIVE'|'LEGACY'|null,
     *     legacyTimestamp?: \Aws\Api\DateTimeResult|null,
     *     endOfLifeTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
