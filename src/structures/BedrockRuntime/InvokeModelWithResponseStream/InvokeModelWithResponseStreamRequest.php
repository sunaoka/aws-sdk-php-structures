<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 * @property string $contentType
 * @property string $accept
 * @property string $modelId
 * @property 'ENABLED'|'DISABLED' $trace
 * @property string $guardrailIdentifier
 * @property string $guardrailVersion
 * @property 'standard'|'optimized' $performanceConfigLatency
 */
class InvokeModelWithResponseStreamRequest extends Request
{
    /**
     * @param array{
     *     body?: string|resource|\Psr\Http\Message\StreamInterface,
     *     contentType?: string,
     *     accept?: string,
     *     modelId: string,
     *     trace?: 'ENABLED'|'DISABLED',
     *     guardrailIdentifier?: string,
     *     guardrailVersion?: string,
     *     performanceConfigLatency?: 'standard'|'optimized'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
