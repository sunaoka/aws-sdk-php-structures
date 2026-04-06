<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TaskId
 * @property string|null $TaskArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $TaskConfigurationId
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null $Status
 */
class OtaTaskSummary extends Shape
{
    /**
     * @param array{
     *     TaskId?: string|null,
     *     TaskArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     TaskConfigurationId?: string|null,
     *     Status?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
