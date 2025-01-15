<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureStage
 * @property string|null $FailureType
 * @property array<string, list<string>>|null $Details
 */
class FailureDetails extends Shape
{
    /**
     * @param array{
     *     FailureStage?: string|null,
     *     FailureType?: string|null,
     *     Details?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
