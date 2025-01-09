<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrIp
 * @property string $Status
 */
class AwsRdsDbSecurityGroupIpRange extends Shape
{
    /**
     * @param array{
     *     CidrIp?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
