<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $VpcSecurityGroupId
 */
class AwsRedshiftClusterVpcSecurityGroup extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     VpcSecurityGroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
