<?php

namespace Sunaoka\Aws\Structures\Outposts\ListBlockingInstancesForCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $AccountId
 * @property 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53' $AwsServiceName
 */
class BlockingInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     AccountId?: string,
     *     AwsServiceName?: 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
