<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegrationAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON_DEMAND'|'SCHEDULED' $ExecutionMode
 * @property OnDemandConfiguration $OnDemandConfiguration
 * @property ScheduleConfiguration $ScheduleConfiguration
 */
class ExecutionConfiguration extends Shape
{
    /**
     * @param array{
     *     ExecutionMode: 'ON_DEMAND'|'SCHEDULED',
     *     OnDemandConfiguration?: OnDemandConfiguration,
     *     ScheduleConfiguration?: ScheduleConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
