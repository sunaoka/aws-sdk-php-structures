<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<RecommendationRelatedEventResource>|null $Resources
 */
class RecommendationRelatedEvent extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Resources?: list<RecommendationRelatedEventResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
