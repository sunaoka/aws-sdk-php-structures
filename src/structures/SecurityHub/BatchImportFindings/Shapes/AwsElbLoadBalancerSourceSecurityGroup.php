<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $OwnerAlias
 */
class AwsElbLoadBalancerSourceSecurityGroup extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     OwnerAlias?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
