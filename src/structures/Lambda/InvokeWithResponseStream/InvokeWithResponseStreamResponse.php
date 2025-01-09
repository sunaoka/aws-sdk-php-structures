<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $StatusCode
 * @property string $ExecutedVersion
 * @property Shapes\InvokeWithResponseStreamResponseEvent $EventStream
 * @property string $ResponseStreamContentType
 */
class InvokeWithResponseStreamResponse extends Response
{
}
