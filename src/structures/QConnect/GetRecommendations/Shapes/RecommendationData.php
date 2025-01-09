<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSummary $data
 * @property Document $document
 * @property string $recommendationId
 * @property 'HIGH'|'MEDIUM'|'LOW' $relevanceLevel
 * @property double $relevanceScore
 * @property 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT' $type
 */
class RecommendationData extends Shape
{
    /**
     * @param array{
     *     data?: DataSummary,
     *     document?: Document,
     *     recommendationId: string,
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW',
     *     relevanceScore?: double,
     *     type?: 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
