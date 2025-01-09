<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'EXTENDED' $supportType
 */
class UpgradePolicyResponse extends Shape
{
    /**
     * @param array{supportType?: 'STANDARD'|'EXTENDED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
