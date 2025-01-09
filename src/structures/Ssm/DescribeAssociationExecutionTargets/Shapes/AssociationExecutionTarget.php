<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $AssociationVersion
 * @property string $ExecutionId
 * @property string $ResourceId
 * @property string $ResourceType
 * @property string $Status
 * @property string $DetailedStatus
 * @property \Aws\Api\DateTimeResult $LastExecutionDate
 * @property OutputSource $OutputSource
 */
class AssociationExecutionTarget extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     AssociationVersion?: string,
     *     ExecutionId?: string,
     *     ResourceId?: string,
     *     ResourceType?: string,
     *     Status?: string,
     *     DetailedStatus?: string,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult,
     *     OutputSource?: OutputSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
