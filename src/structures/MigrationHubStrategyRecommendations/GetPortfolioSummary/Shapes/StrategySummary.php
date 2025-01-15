<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase'|null $strategy
 */
class StrategySummary extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     strategy?: 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
