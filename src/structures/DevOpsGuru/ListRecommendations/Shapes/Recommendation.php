<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Link
 * @property string|null $Name
 * @property string|null $Reason
 * @property list<RecommendationRelatedEvent>|null $RelatedEvents
 * @property list<RecommendationRelatedAnomaly>|null $RelatedAnomalies
 * @property string|null $Category
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Link?: string|null,
     *     Name?: string|null,
     *     Reason?: string|null,
     *     RelatedEvents?: list<RecommendationRelatedEvent>|null,
     *     RelatedAnomalies?: list<RecommendationRelatedAnomaly>|null,
     *     Category?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
