<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetFunction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FunctionId
 * @property 'HTTP_REQUEST'|'CUSTOM_OUTPUT'|'SEQUENTIAL_EXECUTOR' $FunctionType
 * @property string|null $Description
 * @property Shapes\HttpRequestConfiguration|null $HttpRequestConfiguration
 * @property Shapes\CustomOutputConfiguration|null $CustomOutputConfiguration
 * @property Shapes\SequentialExecutorConfiguration|null $SequentialExecutorConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 */
class GetFunctionResponse extends Response
{
}
