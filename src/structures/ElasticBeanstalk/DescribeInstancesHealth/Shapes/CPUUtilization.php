<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $User
 * @property double $Nice
 * @property double $System
 * @property double $Idle
 * @property double $IOWait
 * @property double $IRQ
 * @property double $SoftIRQ
 * @property double $Privileged
 */
class CPUUtilization extends Shape
{
    /**
     * @param array{
     *     User?: double,
     *     Nice?: double,
     *     System?: double,
     *     Idle?: double,
     *     IOWait?: double,
     *     IRQ?: double,
     *     SoftIRQ?: double,
     *     Privileged?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
