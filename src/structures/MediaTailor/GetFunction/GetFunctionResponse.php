<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetFunction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FunctionId
 * @property 'HTTP_REQUEST'|'CUSTOM_OUTPUT'|'CONCURRENT_EXECUTOR'|'SEQUENTIAL_EXECUTOR'|'VAST_REQUEST' $FunctionType
 * @property string|null $Description
 * @property Shapes\HttpRequestConfiguration|null $HttpRequestConfiguration
 * @property Shapes\CustomOutputConfiguration|null $CustomOutputConfiguration
 * @property Shapes\ConcurrentExecutorConfiguration|null $ConcurrentExecutorConfiguration
 * @property Shapes\SequentialExecutorConfiguration|null $SequentialExecutorConfiguration
 * @property Shapes\VastRequestConfiguration|null $VastRequestConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 */
class GetFunctionResponse extends Response
{
}
