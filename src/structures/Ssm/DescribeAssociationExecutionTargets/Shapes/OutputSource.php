<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputSourceId
 * @property string $OutputSourceType
 */
class OutputSource extends Shape
{
    /**
     * @param array{
     *     OutputSourceId?: string,
     *     OutputSourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
