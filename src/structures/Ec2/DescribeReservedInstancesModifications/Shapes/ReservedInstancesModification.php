<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientToken
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $EffectiveDate
 * @property list<ReservedInstancesModificationResult>|null $ModificationResults
 * @property list<ReservedInstancesId>|null $ReservedInstancesIds
 * @property string|null $ReservedInstancesModificationId
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $UpdateDate
 */
class ReservedInstancesModification extends Shape
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     EffectiveDate?: \Aws\Api\DateTimeResult|null,
     *     ModificationResults?: list<ReservedInstancesModificationResult>|null,
     *     ReservedInstancesIds?: list<ReservedInstancesId>|null,
     *     ReservedInstancesModificationId?: string|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     UpdateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
