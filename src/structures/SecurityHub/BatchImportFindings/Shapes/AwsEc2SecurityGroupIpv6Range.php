<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrIpv6
 */
class AwsEc2SecurityGroupIpv6Range extends Shape
{
    /**
     * @param array{CidrIpv6?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
