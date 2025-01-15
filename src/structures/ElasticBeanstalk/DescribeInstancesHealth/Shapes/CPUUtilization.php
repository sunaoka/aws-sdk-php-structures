<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $User
 * @property double|null $Nice
 * @property double|null $System
 * @property double|null $Idle
 * @property double|null $IOWait
 * @property double|null $IRQ
 * @property double|null $SoftIRQ
 * @property double|null $Privileged
 */
class CPUUtilization extends Shape
{
    /**
     * @param array{
     *     User?: double|null,
     *     Nice?: double|null,
     *     System?: double|null,
     *     Idle?: double|null,
     *     IOWait?: double|null,
     *     IRQ?: double|null,
     *     SoftIRQ?: double|null,
     *     Privileged?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
