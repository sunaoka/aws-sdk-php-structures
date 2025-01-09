<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientToken
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult $EffectiveDate
 * @property list<ReservedInstancesModificationResult> $ModificationResults
 * @property list<ReservedInstancesId> $ReservedInstancesIds
 * @property string $ReservedInstancesModificationId
 * @property string $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $UpdateDate
 */
class ReservedInstancesModification extends Shape
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     EffectiveDate?: \Aws\Api\DateTimeResult,
     *     ModificationResults?: list<ReservedInstancesModificationResult>,
     *     ReservedInstancesIds?: list<ReservedInstancesId>,
     *     ReservedInstancesModificationId?: string,
     *     Status?: string,
     *     StatusMessage?: string,
     *     UpdateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
