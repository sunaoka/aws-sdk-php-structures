<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPolicyAllocationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamPolicyId
 * @property string|null $Locale
 * @property 'alb'|'eip'|'rds'|'rnat'|null $ResourceType
 * @property list<IpamPolicyAllocationRule>|null $AllocationRules
 */
class IpamPolicyDocument extends Shape
{
    /**
     * @param array{
     *     IpamPolicyId?: string|null,
     *     Locale?: string|null,
     *     ResourceType?: 'alb'|'eip'|'rds'|'rnat'|null,
     *     AllocationRules?: list<IpamPolicyAllocationRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
