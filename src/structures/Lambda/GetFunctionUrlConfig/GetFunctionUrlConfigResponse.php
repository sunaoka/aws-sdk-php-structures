<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionUrlConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FunctionUrl
 * @property string $FunctionArn
 * @property 'NONE'|'AWS_IAM' $AuthType
 * @property Shapes\Cors $Cors
 * @property string $CreationTime
 * @property string $LastModifiedTime
 * @property 'BUFFERED'|'RESPONSE_STREAM' $InvokeMode
 */
class GetFunctionUrlConfigResponse extends Response
{
}
