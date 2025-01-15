<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceAssociationsStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $Name
 * @property string|null $DocumentVersion
 * @property string|null $AssociationVersion
 * @property string|null $InstanceId
 * @property \Aws\Api\DateTimeResult|null $ExecutionDate
 * @property string|null $Status
 * @property string|null $DetailedStatus
 * @property string|null $ExecutionSummary
 * @property string|null $ErrorCode
 * @property InstanceAssociationOutputUrl|null $OutputUrl
 * @property string|null $AssociationName
 */
class InstanceAssociationStatusInfo extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     Name?: string|null,
     *     DocumentVersion?: string|null,
     *     AssociationVersion?: string|null,
     *     InstanceId?: string|null,
     *     ExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     DetailedStatus?: string|null,
     *     ExecutionSummary?: string|null,
     *     ErrorCode?: string|null,
     *     OutputUrl?: InstanceAssociationOutputUrl|null,
     *     AssociationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
