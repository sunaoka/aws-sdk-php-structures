<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentName
 * @property string $description
 * @property list<RecommendationItem> $items
 * @property string $name
 * @property string $prerequisite
 * @property string $recommendationId
 * @property 'Implemented'|'Inactive'|'NotImplemented'|'Excluded' $recommendationStatus
 * @property string $referenceId
 * @property 'SSM' $serviceType
 */
class SopRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string,
     *     description?: string,
     *     items?: list<RecommendationItem>,
     *     name?: string,
     *     prerequisite?: string,
     *     recommendationId: string,
     *     recommendationStatus?: 'Implemented'|'Inactive'|'NotImplemented'|'Excluded',
     *     referenceId: string,
     *     serviceType: 'SSM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
