<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON_DEMAND'|'SCHEDULED' $ExecutionMode
 * @property OnDemandConfiguration|null $OnDemandConfiguration
 * @property ScheduleConfiguration|null $ScheduleConfiguration
 */
class ExecutionConfiguration extends Shape
{
    /**
     * @param array{
     *     ExecutionMode: 'ON_DEMAND'|'SCHEDULED',
     *     OnDemandConfiguration?: OnDemandConfiguration|null,
     *     ScheduleConfiguration?: ScheduleConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
