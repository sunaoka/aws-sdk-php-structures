<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $OwnerAlias
 */
class AwsElbLoadBalancerSourceSecurityGroup extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     OwnerAlias?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
