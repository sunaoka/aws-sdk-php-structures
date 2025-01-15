<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IamRoleArn
 * @property string|null $ApplyStatus
 */
class ClusterIamRole extends Shape
{
    /**
     * @param array{
     *     IamRoleArn?: string|null,
     *     ApplyStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
