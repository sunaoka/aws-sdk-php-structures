<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $document
 * @property string $recommendationId
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $relevanceLevel
 * @property double|null $relevanceScore
 * @property 'KNOWLEDGE_CONTENT'|null $type
 */
class RecommendationData extends Shape
{
    /**
     * @param array{
     *     document: Document,
     *     recommendationId: string,
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     relevanceScore?: double|null,
     *     type?: 'KNOWLEDGE_CONTENT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
