<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentName
 * @property list<ConfigRecommendation> $configRecommendations
 * @property 'BreachedUnattainable'|'BreachedCanMeet'|'MetCanImprove'|'MissingPolicy' $recommendationStatus
 */
class ComponentRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentName: string,
     *     configRecommendations: list<ConfigRecommendation>,
     *     recommendationStatus: 'BreachedUnattainable'|'BreachedCanMeet'|'MetCanImprove'|'MissingPolicy'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
