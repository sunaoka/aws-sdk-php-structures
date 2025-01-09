<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ParameterValues
 * @property bool $Truncated
 */
class ResolvedTargets extends Shape
{
    /**
     * @param array{
     *     ParameterValues?: list<string>,
     *     Truncated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
