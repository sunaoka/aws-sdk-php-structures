<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $StatusCode
 * @property string|null $ExecutedVersion
 * @property Shapes\InvokeWithResponseStreamResponseEvent|null $EventStream
 * @property string|null $ResponseStreamContentType
 */
class InvokeWithResponseStreamResponse extends Response
{
}
