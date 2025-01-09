<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AssumableRoleArns
 * @property list<string> $ExecutionRoleArns
 */
class EmrSettings extends Shape
{
    /**
     * @param array{
     *     AssumableRoleArns?: list<string>,
     *     ExecutionRoleArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
