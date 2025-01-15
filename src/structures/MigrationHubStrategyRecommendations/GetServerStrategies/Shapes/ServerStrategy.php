<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerStrategies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isPreferred
 * @property int|null $numberOfApplicationComponents
 * @property RecommendationSet|null $recommendation
 * @property 'recommended'|'viableOption'|'notRecommended'|'potential'|null $status
 */
class ServerStrategy extends Shape
{
    /**
     * @param array{
     *     isPreferred?: bool|null,
     *     numberOfApplicationComponents?: int|null,
     *     recommendation?: RecommendationSet|null,
     *     status?: 'recommended'|'viableOption'|'notRecommended'|'potential'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
