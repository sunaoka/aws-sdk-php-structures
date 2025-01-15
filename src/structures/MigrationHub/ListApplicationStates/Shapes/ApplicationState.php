<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListApplicationStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null $ApplicationStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class ApplicationState extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ApplicationStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
