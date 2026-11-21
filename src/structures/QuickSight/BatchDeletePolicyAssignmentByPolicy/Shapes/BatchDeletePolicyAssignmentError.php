<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeletePolicyAssignmentByPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalArn
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchDeletePolicyAssignmentError extends Shape
{
    /**
     * @param array{
     *     PrincipalArn: string,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
