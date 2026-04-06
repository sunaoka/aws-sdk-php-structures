<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSummary|null $data
 * @property Document|null $document
 * @property string $recommendationId
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $relevanceLevel
 * @property double|null $relevanceScore
 * @property 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT'|null $type
 */
class RecommendationData extends Shape
{
    /**
     * @param array{
     *     data?: DataSummary|null,
     *     document?: Document|null,
     *     recommendationId: string,
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     relevanceScore?: double|null,
     *     type?: 'KNOWLEDGE_CONTENT'|'GENERATIVE_RESPONSE'|'GENERATIVE_ANSWER'|'DETECTED_INTENT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
