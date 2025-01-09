<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListEarthObservationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property string $Name
 * @property string $OperationType
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string> $Tags
 */
class ListEarthObservationJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     DurationInSeconds: int,
     *     Name: string,
     *     OperationType: string,
     *     Status: 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
