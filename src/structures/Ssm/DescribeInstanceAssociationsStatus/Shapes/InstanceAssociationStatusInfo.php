<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceAssociationsStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $Name
 * @property string $DocumentVersion
 * @property string $AssociationVersion
 * @property string $InstanceId
 * @property \Aws\Api\DateTimeResult $ExecutionDate
 * @property string $Status
 * @property string $DetailedStatus
 * @property string $ExecutionSummary
 * @property string $ErrorCode
 * @property InstanceAssociationOutputUrl $OutputUrl
 * @property string $AssociationName
 */
class InstanceAssociationStatusInfo extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     Name?: string,
     *     DocumentVersion?: string,
     *     AssociationVersion?: string,
     *     InstanceId?: string,
     *     ExecutionDate?: \Aws\Api\DateTimeResult,
     *     Status?: string,
     *     DetailedStatus?: string,
     *     ExecutionSummary?: string,
     *     ErrorCode?: string,
     *     OutputUrl?: InstanceAssociationOutputUrl,
     *     AssociationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
