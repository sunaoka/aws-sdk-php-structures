<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COLLECTOR_HEALTHY'|'COLLECTOR_UNHEALTHY' $collectorHealth
 * @property string $collectorId
 * @property string $collectorVersion
 * @property ConfigurationSummary $configurationSummary
 * @property string $hostName
 * @property string $ipAddress
 * @property string $lastActivityTimeStamp
 * @property string $registeredTimeStamp
 */
class Collector extends Shape
{
    /**
     * @param array{
     *     collectorHealth?: 'COLLECTOR_HEALTHY'|'COLLECTOR_UNHEALTHY',
     *     collectorId?: string,
     *     collectorVersion?: string,
     *     configurationSummary?: ConfigurationSummary,
     *     hostName?: string,
     *     ipAddress?: string,
     *     lastActivityTimeStamp?: string,
     *     registeredTimeStamp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
