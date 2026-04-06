<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operationName
 * @property string|null $providerName
 * @property string|null $errorType
 * @property string|null $agentId
 * @property string|null $instanceArn
 * @property string|null $contactId
 * @property string|null $initialContactId
 * @property string|null $sessionName
 * @property string|null $aiAgentArn
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'|null $aiAgentType
 * @property string|null $aiAgentName
 * @property string|null $aiAgentId
 * @property int|null $aiAgentVersion
 * @property string|null $aiAgentInvoker
 * @property string|null $aiAgentOrchestratorUseCase
 * @property string|null $requestModel
 * @property int|null $requestMaxTokens
 * @property float|null $temperature
 * @property float|null $topP
 * @property string|null $responseModel
 * @property list<string>|null $responseFinishReasons
 * @property int|null $usageInputTokens
 * @property int|null $usageOutputTokens
 * @property int|null $usageTotalTokens
 * @property int|null $cacheReadInputTokens
 * @property int|null $cacheWriteInputTokens
 * @property list<SpanMessage>|null $inputMessages
 * @property list<SpanMessage>|null $outputMessages
 * @property list<SpanMessageValue>|null $systemInstructions
 * @property string|null $promptArn
 * @property string|null $promptId
 * @property 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'|null $promptType
 * @property string|null $promptName
 * @property int|null $promptVersion
 */
class SpanAttributes extends Shape
{
    /**
     * @param array{
     *     operationName?: string|null,
     *     providerName?: string|null,
     *     errorType?: string|null,
     *     agentId?: string|null,
     *     instanceArn?: string|null,
     *     contactId?: string|null,
     *     initialContactId?: string|null,
     *     sessionName?: string|null,
     *     aiAgentArn?: string|null,
     *     aiAgentType?: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'|null,
     *     aiAgentName?: string|null,
     *     aiAgentId?: string|null,
     *     aiAgentVersion?: int|null,
     *     aiAgentInvoker?: string|null,
     *     aiAgentOrchestratorUseCase?: string|null,
     *     requestModel?: string|null,
     *     requestMaxTokens?: int|null,
     *     temperature?: float|null,
     *     topP?: float|null,
     *     responseModel?: string|null,
     *     responseFinishReasons?: list<string>|null,
     *     usageInputTokens?: int|null,
     *     usageOutputTokens?: int|null,
     *     usageTotalTokens?: int|null,
     *     cacheReadInputTokens?: int|null,
     *     cacheWriteInputTokens?: int|null,
     *     inputMessages?: list<SpanMessage>|null,
     *     outputMessages?: list<SpanMessage>|null,
     *     systemInstructions?: list<SpanMessageValue>|null,
     *     promptArn?: string|null,
     *     promptId?: string|null,
     *     promptType?: 'ANSWER_GENERATION'|'INTENT_LABELING_GENERATION'|'QUERY_REFORMULATION'|'SELF_SERVICE_PRE_PROCESSING'|'SELF_SERVICE_ANSWER_GENERATION'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'EMAIL_QUERY_REFORMULATION'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION'|null,
     *     promptName?: string|null,
     *     promptVersion?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
