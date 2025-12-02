<?php

namespace Sunaoka\Aws\Structures\Lambda\Invoke;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $StatusCode
 * @property string|null $FunctionError
 * @property string|null $LogResult
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Payload
 * @property string|null $ExecutedVersion
 * @property string|null $DurableExecutionArn
 */
class InvokeResponse extends Response
{
}
