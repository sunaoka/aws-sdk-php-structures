<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property string $EndpointArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed' $EndpointStatus
 */
class EndpointSummary extends Shape
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     EndpointStatus: 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
