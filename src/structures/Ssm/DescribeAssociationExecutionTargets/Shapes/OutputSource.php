<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputSourceId
 * @property string|null $OutputSourceType
 */
class OutputSource extends Shape
{
    /**
     * @param array{
     *     OutputSourceId?: string|null,
     *     OutputSourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
