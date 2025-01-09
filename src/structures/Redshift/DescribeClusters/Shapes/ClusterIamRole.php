<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property string $ApplyStatus
 */
class ClusterIamRole extends Shape
{
    /**
     * @param array{
     *     IamRoleArn?: string,
     *     ApplyStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
