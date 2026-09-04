<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionId
 * @property 'HTTP_REQUEST'|'CUSTOM_OUTPUT'|'CONCURRENT_EXECUTOR'|'SEQUENTIAL_EXECUTOR'|'VAST_REQUEST' $FunctionType
 * @property string|null $Description
 * @property HttpRequestConfiguration|null $HttpRequestConfiguration
 * @property CustomOutputConfiguration|null $CustomOutputConfiguration
 * @property ConcurrentExecutorConfiguration|null $ConcurrentExecutorConfiguration
 * @property SequentialExecutorConfiguration|null $SequentialExecutorConfiguration
 * @property VastRequestConfiguration|null $VastRequestConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 */
class FunctionShape extends Shape
{
    /**
     * @param array{
     *     FunctionId: string,
     *     FunctionType: 'HTTP_REQUEST'|'CUSTOM_OUTPUT'|'CONCURRENT_EXECUTOR'|'SEQUENTIAL_EXECUTOR'|'VAST_REQUEST',
     *     Description?: string|null,
     *     HttpRequestConfiguration?: HttpRequestConfiguration|null,
     *     CustomOutputConfiguration?: CustomOutputConfiguration|null,
     *     ConcurrentExecutorConfiguration?: ConcurrentExecutorConfiguration|null,
     *     SequentialExecutorConfiguration?: SequentialExecutorConfiguration|null,
     *     VastRequestConfiguration?: VastRequestConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
