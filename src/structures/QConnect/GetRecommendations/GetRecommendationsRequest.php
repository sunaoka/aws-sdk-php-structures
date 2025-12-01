<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property int<1, 100>|null $maxResults
 * @property int<0, 20>|null $waitTimeSeconds
 * @property string|null $nextChunkToken
 * @property 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT'|'GENERATIVE_ANSWER_CHUNK'|'BLOCKED_GENERATIVE_ANSWER_CHUNK'|'INTENT_ANSWER_CHUNK'|'BLOCKED_INTENT_ANSWER_CHUNK'|'EMAIL_RESPONSE_CHUNK'|'EMAIL_OVERVIEW_CHUNK'|'EMAIL_GENERATIVE_ANSWER_CHUNK'|'CASE_SUMMARIZATION_CHUNK'|'BLOCKED_CASE_SUMMARIZATION_CHUNK'|'SUGGESTED_MESSAGE'|'NOTES_CHUNK'|'BLOCKED_NOTES_CHUNK'|null $recommendationType
 */
class GetRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     maxResults?: int<1, 100>|null,
     *     waitTimeSeconds?: int<0, 20>|null,
     *     nextChunkToken?: string|null,
     *     recommendationType?: 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT'|'GENERATIVE_ANSWER_CHUNK'|'BLOCKED_GENERATIVE_ANSWER_CHUNK'|'INTENT_ANSWER_CHUNK'|'BLOCKED_INTENT_ANSWER_CHUNK'|'EMAIL_RESPONSE_CHUNK'|'EMAIL_OVERVIEW_CHUNK'|'EMAIL_GENERATIVE_ANSWER_CHUNK'|'CASE_SUMMARIZATION_CHUNK'|'BLOCKED_CASE_SUMMARIZATION_CHUNK'|'SUGGESTED_MESSAGE'|'NOTES_CHUNK'|'BLOCKED_NOTES_CHUNK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
