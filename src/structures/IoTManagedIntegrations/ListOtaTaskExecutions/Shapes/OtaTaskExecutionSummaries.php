<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTaskExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OtaTaskExecutionSummary|null $TaskExecutionSummary
 * @property string|null $ManagedThingId
 */
class OtaTaskExecutionSummaries extends Shape
{
    /**
     * @param array{
     *     TaskExecutionSummary?: OtaTaskExecutionSummary|null,
     *     ManagedThingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
