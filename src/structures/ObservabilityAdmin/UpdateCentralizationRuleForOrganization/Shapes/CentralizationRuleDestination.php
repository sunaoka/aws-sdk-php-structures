<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string|null $Account
 * @property DestinationLogsConfiguration|null $DestinationLogsConfiguration
 * @property DestinationMetricsConfiguration|null $DestinationMetricsConfiguration
 * @property DestinationProfilesConfiguration|null $DestinationProfilesConfiguration
 */
class CentralizationRuleDestination extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     Account?: string|null,
     *     DestinationLogsConfiguration?: DestinationLogsConfiguration|null,
     *     DestinationMetricsConfiguration?: DestinationMetricsConfiguration|null,
     *     DestinationProfilesConfiguration?: DestinationProfilesConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
