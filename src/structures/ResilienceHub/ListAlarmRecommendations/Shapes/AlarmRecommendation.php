<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAlarmRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentName
 * @property list<string> $appComponentNames
 * @property string $description
 * @property list<RecommendationItem> $items
 * @property string $name
 * @property string $prerequisite
 * @property string $recommendationId
 * @property 'Implemented'|'Inactive'|'NotImplemented'|'Excluded' $recommendationStatus
 * @property string $referenceId
 * @property 'Metric'|'Composite'|'Canary'|'Logs'|'Event' $type
 */
class AlarmRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string,
     *     appComponentNames?: list<string>,
     *     description?: string,
     *     items?: list<RecommendationItem>,
     *     name: string,
     *     prerequisite?: string,
     *     recommendationId: string,
     *     recommendationStatus?: 'Implemented'|'Inactive'|'NotImplemented'|'Excluded',
     *     referenceId: string,
     *     type: 'Metric'|'Composite'|'Canary'|'Logs'|'Event'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
