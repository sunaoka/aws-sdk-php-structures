<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ParameterValues
 * @property bool|null $Truncated
 */
class ResolvedTargets extends Shape
{
    /**
     * @param array{
     *     ParameterValues?: list<string>|null,
     *     Truncated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
