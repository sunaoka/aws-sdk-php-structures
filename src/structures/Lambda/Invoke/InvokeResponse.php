<?php

namespace Sunaoka\Aws\Structures\Lambda\Invoke;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $StatusCode
 * @property string $FunctionError
 * @property string $LogResult
 * @property string|resource|\Psr\Http\Message\StreamInterface $Payload
 * @property string $ExecutedVersion
 */
class InvokeResponse extends Response
{
}
