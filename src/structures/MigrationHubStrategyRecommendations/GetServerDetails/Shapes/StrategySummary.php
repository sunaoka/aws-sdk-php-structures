<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase' $strategy
 */
class StrategySummary extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     strategy?: 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
