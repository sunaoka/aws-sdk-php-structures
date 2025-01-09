<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentStrategies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isPreferred
 * @property RecommendationSet $recommendation
 * @property 'recommended'|'viableOption'|'notRecommended'|'potential' $status
 */
class ApplicationComponentStrategy extends Shape
{
    /**
     * @param array{
     *     isPreferred?: bool,
     *     recommendation?: RecommendationSet,
     *     status?: 'recommended'|'viableOption'|'notRecommended'|'potential'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
