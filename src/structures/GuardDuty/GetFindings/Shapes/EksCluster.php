<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'PENDING'|null $Status
 * @property string|null $VpcId
 * @property list<string>|null $Ec2InstanceUids
 */
class EksCluster extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'PENDING'|null,
     *     VpcId?: string|null,
     *     Ec2InstanceUids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
