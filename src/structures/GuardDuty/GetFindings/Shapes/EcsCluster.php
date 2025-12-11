<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'PROVISIONING'|'DEPROVISIONING'|'FAILED'|'INACTIVE'|null $Status
 * @property list<string>|null $Ec2InstanceUids
 */
class EcsCluster extends Shape
{
    /**
     * @param array{
     *     Status?: 'ACTIVE'|'PROVISIONING'|'DEPROVISIONING'|'FAILED'|'INACTIVE'|null,
     *     Ec2InstanceUids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
