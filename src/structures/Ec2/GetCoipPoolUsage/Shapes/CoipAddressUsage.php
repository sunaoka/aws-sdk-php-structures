<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCoipPoolUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllocationId
 * @property string $AwsAccountId
 * @property string $AwsService
 * @property string $CoIp
 */
class CoipAddressUsage extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string,
     *     AwsAccountId?: string,
     *     AwsService?: string,
     *     CoIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
