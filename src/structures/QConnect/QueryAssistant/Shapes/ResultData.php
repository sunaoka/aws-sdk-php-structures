<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resultId
 * @property Document|null $document
 * @property double|null $relevanceScore
 * @property DataSummary|null $data
 * @property 'KNOWLEDGE_CONTENT'|'INTENT_ANSWER'|'GENERATIVE_ANSWER'|'GENERATIVE_ANSWER_CHUNK'|'BLOCKED_GENERATIVE_ANSWER_CHUNK'|'INTENT_ANSWER_CHUNK'|'BLOCKED_INTENT_ANSWER_CHUNK'|'EMAIL_RESPONSE_CHUNK'|'EMAIL_OVERVIEW_CHUNK'|'EMAIL_GENERATIVE_ANSWER_CHUNK'|'CASE_SUMMARIZATION_CHUNK'|'BLOCKED_CASE_SUMMARIZATION_CHUNK'|'NOTES'|'NOTES_CHUNK'|'BLOCKED_NOTES_CHUNK'|null $type
 */
class ResultData extends Shape
{
    /**
     * @param array{
     *     resultId: string,
     *     document?: Document|null,
     *     relevanceScore?: double|null,
     *     data?: DataSummary|null,
     *     type?: 'KNOWLEDGE_CONTENT'|'INTENT_ANSWER'|'GENERATIVE_ANSWER'|'GENERATIVE_ANSWER_CHUNK'|'BLOCKED_GENERATIVE_ANSWER_CHUNK'|'INTENT_ANSWER_CHUNK'|'BLOCKED_INTENT_ANSWER_CHUNK'|'EMAIL_RESPONSE_CHUNK'|'EMAIL_OVERVIEW_CHUNK'|'EMAIL_GENERATIVE_ANSWER_CHUNK'|'CASE_SUMMARIZATION_CHUNK'|'BLOCKED_CASE_SUMMARIZATION_CHUNK'|'NOTES'|'NOTES_CHUNK'|'BLOCKED_NOTES_CHUNK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
