<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 * @property string $contentType
 * @property 'standard'|'optimized'|null $performanceConfigLatency
 * @property 'priority'|'default'|'flex'|'reserved'|null $serviceTier
 */
class InvokeModelResponse extends Response
{
}
