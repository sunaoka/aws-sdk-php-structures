<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterSecurityGroupName
 * @property string $Status
 */
class AwsRedshiftClusterClusterSecurityGroup extends Shape
{
    /**
     * @param array{
     *     ClusterSecurityGroupName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
