<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property string $EndpointConfigName
 * @property 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed' $EndpointStatus
 * @property string $FailureReason
 */
class EndpointMetadata extends Shape
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointConfigName?: string,
     *     EndpointStatus?: 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed',
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
