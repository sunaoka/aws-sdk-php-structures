<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCoipPoolUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AllocationId
 * @property string|null $AwsAccountId
 * @property string|null $AwsService
 * @property string|null $CoIp
 */
class CoipAddressUsage extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string|null,
     *     AwsAccountId?: string|null,
     *     AwsService?: string|null,
     *     CoIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
