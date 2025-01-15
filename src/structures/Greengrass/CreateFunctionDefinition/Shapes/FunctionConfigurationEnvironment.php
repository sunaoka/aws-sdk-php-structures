<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AccessSysfs
 * @property FunctionExecutionConfig|null $Execution
 * @property list<ResourceAccessPolicy>|null $ResourceAccessPolicies
 * @property array<string, string>|null $Variables
 */
class FunctionConfigurationEnvironment extends Shape
{
    /**
     * @param array{
     *     AccessSysfs?: bool|null,
     *     Execution?: FunctionExecutionConfig|null,
     *     ResourceAccessPolicies?: list<ResourceAccessPolicy>|null,
     *     Variables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
