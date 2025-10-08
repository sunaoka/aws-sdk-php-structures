<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string|null $Account
 * @property DestinationLogsConfiguration|null $DestinationLogsConfiguration
 */
class CentralizationRuleDestination extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     Account?: string|null,
     *     DestinationLogsConfiguration?: DestinationLogsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
