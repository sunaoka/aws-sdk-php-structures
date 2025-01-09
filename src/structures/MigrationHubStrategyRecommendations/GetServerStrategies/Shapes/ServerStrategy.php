<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerStrategies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isPreferred
 * @property int $numberOfApplicationComponents
 * @property RecommendationSet $recommendation
 * @property 'recommended'|'viableOption'|'notRecommended'|'potential' $status
 */
class ServerStrategy extends Shape
{
    /**
     * @param array{
     *     isPreferred?: bool,
     *     numberOfApplicationComponents?: int,
     *     recommendation?: RecommendationSet,
     *     status?: 'recommended'|'viableOption'|'notRecommended'|'potential'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
