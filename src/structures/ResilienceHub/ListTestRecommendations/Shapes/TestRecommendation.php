<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListTestRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appComponentId
 * @property string|null $appComponentName
 * @property list<string>|null $dependsOnAlarms
 * @property string|null $description
 * @property string|null $intent
 * @property list<RecommendationItem>|null $items
 * @property string|null $name
 * @property string|null $prerequisite
 * @property string|null $recommendationId
 * @property 'Implemented'|'Inactive'|'NotImplemented'|'Excluded'|null $recommendationStatus
 * @property string $referenceId
 * @property 'Small'|'Medium'|'High'|null $risk
 * @property 'Software'|'Hardware'|'AZ'|'Region'|null $type
 */
class TestRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentId?: string|null,
     *     appComponentName?: string|null,
     *     dependsOnAlarms?: list<string>|null,
     *     description?: string|null,
     *     intent?: string|null,
     *     items?: list<RecommendationItem>|null,
     *     name?: string|null,
     *     prerequisite?: string|null,
     *     recommendationId?: string|null,
     *     recommendationStatus?: 'Implemented'|'Inactive'|'NotImplemented'|'Excluded'|null,
     *     referenceId: string,
     *     risk?: 'Small'|'Medium'|'High'|null,
     *     type?: 'Software'|'Hardware'|'AZ'|'Region'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
