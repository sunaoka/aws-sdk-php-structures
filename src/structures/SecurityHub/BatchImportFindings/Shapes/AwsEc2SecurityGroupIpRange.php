<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrIp
 */
class AwsEc2SecurityGroupIpRange extends Shape
{
    /**
     * @param array{CidrIp?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
