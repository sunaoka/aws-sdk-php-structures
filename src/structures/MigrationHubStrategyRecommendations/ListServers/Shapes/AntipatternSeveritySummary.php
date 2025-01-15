<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $severity
 */
class AntipatternSeveritySummary extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     severity?: 'HIGH'|'MEDIUM'|'LOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
