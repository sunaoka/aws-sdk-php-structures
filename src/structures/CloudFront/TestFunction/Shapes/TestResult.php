<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionSummary|null $FunctionSummary
 * @property string|null $ComputeUtilization
 * @property list<string>|null $FunctionExecutionLogs
 * @property string|null $FunctionErrorMessage
 * @property string|null $FunctionOutput
 */
class TestResult extends Shape
{
    /**
     * @param array{
     *     FunctionSummary?: FunctionSummary|null,
     *     ComputeUtilization?: string|null,
     *     FunctionExecutionLogs?: list<string>|null,
     *     FunctionErrorMessage?: string|null,
     *     FunctionOutput?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
