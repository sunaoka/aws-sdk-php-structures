<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAlarmRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appComponentName
 * @property list<string>|null $appComponentNames
 * @property string|null $description
 * @property list<RecommendationItem>|null $items
 * @property string $name
 * @property string|null $prerequisite
 * @property string $recommendationId
 * @property 'Implemented'|'Inactive'|'NotImplemented'|'Excluded'|null $recommendationStatus
 * @property string $referenceId
 * @property 'Metric'|'Composite'|'Canary'|'Logs'|'Event' $type
 */
class AlarmRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string|null,
     *     appComponentNames?: list<string>|null,
     *     description?: string|null,
     *     items?: list<RecommendationItem>|null,
     *     name: string,
     *     prerequisite?: string|null,
     *     recommendationId: string,
     *     recommendationStatus?: 'Implemented'|'Inactive'|'NotImplemented'|'Excluded'|null,
     *     referenceId: string,
     *     type: 'Metric'|'Composite'|'Canary'|'Logs'|'Event'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
