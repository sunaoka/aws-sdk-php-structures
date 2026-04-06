<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestConnectionFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectionFunctionSummary|null $ConnectionFunctionSummary
 * @property string|null $ComputeUtilization
 * @property list<string>|null $ConnectionFunctionExecutionLogs
 * @property string|null $ConnectionFunctionErrorMessage
 * @property string|null $ConnectionFunctionOutput
 */
class ConnectionFunctionTestResult extends Shape
{
    /**
     * @param array{
     *     ConnectionFunctionSummary?: ConnectionFunctionSummary|null,
     *     ComputeUtilization?: string|null,
     *     ConnectionFunctionExecutionLogs?: list<string>|null,
     *     ConnectionFunctionErrorMessage?: string|null,
     *     ConnectionFunctionOutput?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
