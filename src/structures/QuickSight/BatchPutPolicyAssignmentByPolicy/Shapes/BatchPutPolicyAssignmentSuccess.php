<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchPutPolicyAssignmentByPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalArn
 * @property string|null $ReplacedPolicyArn
 * @property int<1, max> $Revision
 */
class BatchPutPolicyAssignmentSuccess extends Shape
{
    /**
     * @param array{
     *     PrincipalArn: string,
     *     ReplacedPolicyArn?: string|null,
     *     Revision: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
