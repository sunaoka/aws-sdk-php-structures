<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $AssociationVersion
 * @property string|null $ExecutionId
 * @property string|null $ResourceId
 * @property string|null $ResourceType
 * @property string|null $Status
 * @property string|null $DetailedStatus
 * @property \Aws\Api\DateTimeResult|null $LastExecutionDate
 * @property OutputSource|null $OutputSource
 */
class AssociationExecutionTarget extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     AssociationVersion?: string|null,
     *     ExecutionId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: string|null,
     *     Status?: string|null,
     *     DetailedStatus?: string|null,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     OutputSource?: OutputSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
