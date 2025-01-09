<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $document
 * @property string $recommendationId
 * @property 'HIGH'|'MEDIUM'|'LOW' $relevanceLevel
 * @property double $relevanceScore
 * @property 'KNOWLEDGE_CONTENT' $type
 */
class RecommendationData extends Shape
{
    /**
     * @param array{
     *     document: Document,
     *     recommendationId: string,
     *     relevanceLevel?: 'HIGH'|'MEDIUM'|'LOW',
     *     relevanceScore?: double,
     *     type?: 'KNOWLEDGE_CONTENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
