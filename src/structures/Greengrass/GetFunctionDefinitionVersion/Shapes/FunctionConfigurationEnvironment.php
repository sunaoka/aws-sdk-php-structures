<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AccessSysfs
 * @property FunctionExecutionConfig $Execution
 * @property list<ResourceAccessPolicy> $ResourceAccessPolicies
 * @property array<string, string> $Variables
 */
class FunctionConfigurationEnvironment extends Shape
{
    /**
     * @param array{
     *     AccessSysfs?: bool,
     *     Execution?: FunctionExecutionConfig,
     *     ResourceAccessPolicies?: list<ResourceAccessPolicy>,
     *     Variables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
