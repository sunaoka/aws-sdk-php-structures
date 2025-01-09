<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property 'HIGH'|'MEDIUM'|'LOW' $severity
 */
class AntipatternSeveritySummary extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     severity?: 'HIGH'|'MEDIUM'|'LOW'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
