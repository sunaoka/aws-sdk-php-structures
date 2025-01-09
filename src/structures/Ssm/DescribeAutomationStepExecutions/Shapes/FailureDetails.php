<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailureStage
 * @property string $FailureType
 * @property array<string, list<string>> $Details
 */
class FailureDetails extends Shape
{
    /**
     * @param array{
     *     FailureStage?: string,
     *     FailureType?: string,
     *     Details?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
