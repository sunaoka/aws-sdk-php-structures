<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $body
 * @property string|null $contentType
 * @property string|null $accept
 * @property string $modelId
 * @property 'ENABLED'|'DISABLED'|null $trace
 * @property string|null $guardrailIdentifier
 * @property string|null $guardrailVersion
 * @property 'standard'|'optimized'|null $performanceConfigLatency
 */
class InvokeModelRequest extends Request
{
    /**
     * @param array{
     *     body?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     contentType?: string|null,
     *     accept?: string|null,
     *     modelId: string,
     *     trace?: 'ENABLED'|'DISABLED'|null,
     *     guardrailIdentifier?: string|null,
     *     guardrailVersion?: string|null,
     *     performanceConfigLatency?: 'standard'|'optimized'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
