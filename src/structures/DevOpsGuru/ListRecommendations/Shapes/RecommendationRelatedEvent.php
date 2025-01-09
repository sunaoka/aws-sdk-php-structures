<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<RecommendationRelatedEventResource> $Resources
 */
class RecommendationRelatedEvent extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Resources?: list<RecommendationRelatedEventResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
