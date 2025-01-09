<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $Link
 * @property string $Name
 * @property string $Reason
 * @property list<RecommendationRelatedEvent> $RelatedEvents
 * @property list<RecommendationRelatedAnomaly> $RelatedAnomalies
 * @property string $Category
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Link?: string,
     *     Name?: string,
     *     Reason?: string,
     *     RelatedEvents?: list<RecommendationRelatedEvent>,
     *     RelatedAnomalies?: list<RecommendationRelatedAnomaly>,
     *     Category?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
