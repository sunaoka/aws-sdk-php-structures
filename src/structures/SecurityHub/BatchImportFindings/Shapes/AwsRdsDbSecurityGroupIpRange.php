<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrIp
 * @property string|null $Status
 */
class AwsRdsDbSecurityGroupIpRange extends Shape
{
    /**
     * @param array{
     *     CidrIp?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
