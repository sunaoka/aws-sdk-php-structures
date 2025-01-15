<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COLLECTOR_HEALTHY'|'COLLECTOR_UNHEALTHY'|null $collectorHealth
 * @property string|null $collectorId
 * @property string|null $collectorVersion
 * @property ConfigurationSummary|null $configurationSummary
 * @property string|null $hostName
 * @property string|null $ipAddress
 * @property string|null $lastActivityTimeStamp
 * @property string|null $registeredTimeStamp
 */
class Collector extends Shape
{
    /**
     * @param array{
     *     collectorHealth?: 'COLLECTOR_HEALTHY'|'COLLECTOR_UNHEALTHY'|null,
     *     collectorId?: string|null,
     *     collectorVersion?: string|null,
     *     configurationSummary?: ConfigurationSummary|null,
     *     hostName?: string|null,
     *     ipAddress?: string|null,
     *     lastActivityTimeStamp?: string|null,
     *     registeredTimeStamp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
