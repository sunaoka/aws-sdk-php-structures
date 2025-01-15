<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentStrategies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isPreferred
 * @property RecommendationSet|null $recommendation
 * @property 'recommended'|'viableOption'|'notRecommended'|'potential'|null $status
 */
class ApplicationComponentStrategy extends Shape
{
    /**
     * @param array{
     *     isPreferred?: bool|null,
     *     recommendation?: RecommendationSet|null,
     *     status?: 'recommended'|'viableOption'|'notRecommended'|'potential'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
