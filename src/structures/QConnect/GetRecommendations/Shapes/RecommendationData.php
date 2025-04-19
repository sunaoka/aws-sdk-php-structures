<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendationId
 * @property Document|null $document
 * @property double|null $relevanceScore
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $relevanceLevel
 * @property 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT'|'GENERATIVE_ANSWER_CHUNK'|'BLOCKED_GENERATIVE_ANSWER_CHUNK'|'INTENT_ANSWER_CHUNK'|'BLOCKED_INTENT_ANSWER_CHUNK'|null $type
 * @property DataSummary|null $data
 */
class RecommendationData extends Shape
{
    /**
     * @param array{
     *     recommendationId: string,
     *     document?: Document|null,
     *     relevanceScore?: double|null,
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     type?: 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT'|'GENERATIVE_ANSWER_CHUNK'|'BLOCKED_GENERATIVE_ANSWER_CHUNK'|'INTENT_ANSWER_CHUNK'|'BLOCKED_INTENT_ANSWER_CHUNK'|null,
     *     data?: DataSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
