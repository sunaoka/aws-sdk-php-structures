<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListApplicationStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED' $ApplicationStatus
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class ApplicationState extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ApplicationStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED',
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
