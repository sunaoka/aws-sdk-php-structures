<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionId
 * @property 'HTTP_REQUEST'|'CUSTOM_OUTPUT'|'SEQUENTIAL_EXECUTOR' $FunctionType
 * @property string|null $Description
 * @property Shapes\HttpRequestConfiguration|null $HttpRequestConfiguration
 * @property Shapes\CustomOutputConfiguration|null $CustomOutputConfiguration
 * @property Shapes\SequentialExecutorConfiguration|null $SequentialExecutorConfiguration
 * @property array<string, string>|null $Tags
 */
class PutFunctionRequest extends Request
{
    /**
     * @param array{
     *     FunctionId: string,
     *     FunctionType: 'HTTP_REQUEST'|'CUSTOM_OUTPUT'|'SEQUENTIAL_EXECUTOR',
     *     Description?: string|null,
     *     HttpRequestConfiguration?: Shapes\HttpRequestConfiguration|null,
     *     CustomOutputConfiguration?: Shapes\CustomOutputConfiguration|null,
     *     SequentialExecutorConfiguration?: Shapes\SequentialExecutorConfiguration|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
