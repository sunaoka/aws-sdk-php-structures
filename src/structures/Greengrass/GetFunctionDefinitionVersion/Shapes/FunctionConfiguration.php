<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'binary'|'json'|null $EncodingType
 * @property FunctionConfigurationEnvironment|null $Environment
 * @property string|null $ExecArgs
 * @property string|null $Executable
 * @property int|null $MemorySize
 * @property bool|null $Pinned
 * @property int|null $Timeout
 * @property string|null $FunctionRuntimeOverride
 */
class FunctionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncodingType?: 'binary'|'json'|null,
     *     Environment?: FunctionConfigurationEnvironment|null,
     *     ExecArgs?: string|null,
     *     Executable?: string|null,
     *     MemorySize?: int|null,
     *     Pinned?: bool|null,
     *     Timeout?: int|null,
     *     FunctionRuntimeOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
