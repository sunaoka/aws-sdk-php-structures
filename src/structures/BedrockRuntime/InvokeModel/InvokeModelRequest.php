<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $body
 * @property string $contentType
 * @property string $accept
 * @property string $modelId
 * @property 'ENABLED'|'DISABLED' $trace
 * @property string $guardrailIdentifier
 * @property string $guardrailVersion
 * @property 'standard'|'optimized' $performanceConfigLatency
 */
class InvokeModelRequest extends Request
{
    /**
     * @param array{
     *     body?: string,
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
