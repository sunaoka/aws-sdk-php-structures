<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'binary'|'json' $EncodingType
 * @property FunctionConfigurationEnvironment $Environment
 * @property string $ExecArgs
 * @property string $Executable
 * @property int $MemorySize
 * @property bool $Pinned
 * @property int $Timeout
 * @property string $FunctionRuntimeOverride
 */
class FunctionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncodingType?: 'binary'|'json',
     *     Environment?: FunctionConfigurationEnvironment,
     *     ExecArgs?: string,
     *     Executable?: string,
     *     MemorySize?: int,
     *     Pinned?: bool,
     *     Timeout?: int,
     *     FunctionRuntimeOverride?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
