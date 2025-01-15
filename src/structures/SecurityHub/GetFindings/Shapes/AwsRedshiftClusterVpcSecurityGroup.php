<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property string|null $VpcSecurityGroupId
 */
class AwsRedshiftClusterVpcSecurityGroup extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     VpcSecurityGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
