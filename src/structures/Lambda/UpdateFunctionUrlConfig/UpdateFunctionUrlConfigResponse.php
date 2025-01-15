<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionUrlConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FunctionUrl
 * @property string $FunctionArn
 * @property 'NONE'|'AWS_IAM' $AuthType
 * @property Shapes\Cors|null $Cors
 * @property string $CreationTime
 * @property string $LastModifiedTime
 * @property 'BUFFERED'|'RESPONSE_STREAM'|null $InvokeMode
 */
class UpdateFunctionUrlConfigResponse extends Response
{
}
