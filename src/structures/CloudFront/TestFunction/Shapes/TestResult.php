<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionSummary $FunctionSummary
 * @property string $ComputeUtilization
 * @property list<string> $FunctionExecutionLogs
 * @property string $FunctionErrorMessage
 * @property string $FunctionOutput
 */
class TestResult extends Shape
{
    /**
     * @param array{
     *     FunctionSummary?: FunctionSummary,
     *     ComputeUtilization?: string,
     *     FunctionExecutionLogs?: list<string>,
     *     FunctionErrorMessage?: string,
     *     FunctionOutput?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
