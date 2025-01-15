<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterSecurityGroupName
 * @property string|null $Status
 */
class AwsRedshiftClusterClusterSecurityGroup extends Shape
{
    /**
     * @param array{
     *     ClusterSecurityGroupName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
