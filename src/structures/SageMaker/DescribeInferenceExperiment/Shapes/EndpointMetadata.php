<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property string|null $EndpointConfigName
 * @property 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed'|null $EndpointStatus
 * @property string|null $FailureReason
 */
class EndpointMetadata extends Shape
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointConfigName?: string|null,
     *     EndpointStatus?: 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed'|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
