<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 * @property string|null $contentType
 * @property string|null $accept
 * @property string $modelId
 * @property 'ENABLED'|'DISABLED'|null $trace
 * @property string|null $guardrailIdentifier
 * @property string|null $guardrailVersion
 */
class InvokeModelWithResponseStreamRequest extends Request
{
    /**
     * @param array{
     *     body: string|resource|\Psr\Http\Message\StreamInterface,
     *     contentType?: string|null,
     *     accept?: string|null,
     *     modelId: string,
     *     trace?: 'ENABLED'|'DISABLED'|null,
     *     guardrailIdentifier?: string|null,
     *     guardrailVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
