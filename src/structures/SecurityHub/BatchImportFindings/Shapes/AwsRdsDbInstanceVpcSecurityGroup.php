<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcSecurityGroupId
 * @property string $Status
 */
class AwsRdsDbInstanceVpcSecurityGroup extends Shape
{
    /**
     * @param array{
     *     VpcSecurityGroupId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
