<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ResponseStream $body
 * @property string $contentType
 * @property 'standard'|'optimized'|null $performanceConfigLatency
 * @property 'priority'|'default'|'flex'|'reserved'|null $serviceTier
 */
class InvokeModelWithResponseStreamResponse extends Response
{
}
