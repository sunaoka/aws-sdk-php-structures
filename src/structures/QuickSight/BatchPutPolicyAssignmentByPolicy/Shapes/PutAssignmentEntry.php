<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchPutPolicyAssignmentByPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalArn
 * @property string|null $ExistingPolicyArn
 * @property int<1, max>|null $Revision
 */
class PutAssignmentEntry extends Shape
{
    /**
     * @param array{
     *     PrincipalArn: string,
     *     ExistingPolicyArn?: string|null,
     *     Revision?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
