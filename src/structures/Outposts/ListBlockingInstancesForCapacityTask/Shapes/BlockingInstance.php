<?php

namespace Sunaoka\Aws\Structures\Outposts\ListBlockingInstancesForCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $AccountId
 * @property 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'|null $AwsServiceName
 */
class BlockingInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     AccountId?: string|null,
     *     AwsServiceName?: 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
