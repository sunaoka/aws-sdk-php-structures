<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appComponentName
 * @property string|null $description
 * @property list<RecommendationItem>|null $items
 * @property string|null $name
 * @property string|null $prerequisite
 * @property string $recommendationId
 * @property 'Implemented'|'Inactive'|'NotImplemented'|'Excluded'|null $recommendationStatus
 * @property string $referenceId
 * @property 'SSM' $serviceType
 */
class SopRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string|null,
     *     description?: string|null,
     *     items?: list<RecommendationItem>|null,
     *     name?: string|null,
     *     prerequisite?: string|null,
     *     recommendationId: string,
     *     recommendationStatus?: 'Implemented'|'Inactive'|'NotImplemented'|'Excluded'|null,
     *     referenceId: string,
     *     serviceType: 'SSM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
