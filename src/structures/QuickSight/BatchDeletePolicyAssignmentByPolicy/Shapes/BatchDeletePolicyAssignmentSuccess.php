<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeletePolicyAssignmentByPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalArn
 */
class BatchDeletePolicyAssignmentSuccess extends Shape
{
    /**
     * @param array{PrincipalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
