<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListTestRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentId
 * @property string $appComponentName
 * @property list<string> $dependsOnAlarms
 * @property string $description
 * @property string $intent
 * @property list<RecommendationItem> $items
 * @property string $name
 * @property string $prerequisite
 * @property string $recommendationId
 * @property 'Implemented'|'Inactive'|'NotImplemented'|'Excluded' $recommendationStatus
 * @property string $referenceId
 * @property 'Small'|'Medium'|'High' $risk
 * @property 'Software'|'Hardware'|'AZ'|'Region' $type
 */
class TestRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentId?: string,
     *     appComponentName?: string,
     *     dependsOnAlarms?: list<string>,
     *     description?: string,
     *     intent?: string,
     *     items?: list<RecommendationItem>,
     *     name?: string,
     *     prerequisite?: string,
     *     recommendationId?: string,
     *     recommendationStatus?: 'Implemented'|'Inactive'|'NotImplemented'|'Excluded',
     *     referenceId: string,
     *     risk?: 'Small'|'Medium'|'High',
     *     type?: 'Software'|'Hardware'|'AZ'|'Region'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
