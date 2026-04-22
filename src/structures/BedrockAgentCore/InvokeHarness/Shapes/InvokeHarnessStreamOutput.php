<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessMessageStartEvent|null $messageStart
 * @property HarnessContentBlockStartEvent|null $contentBlockStart
 * @property HarnessContentBlockDeltaEvent|null $contentBlockDelta
 * @property HarnessContentBlockStopEvent|null $contentBlockStop
 * @property HarnessMessageStopEvent|null $messageStop
 * @property HarnessMetadataEvent|null $metadata
 * @property InternalServerException|null $internalServerException
 * @property ValidationException|null $validationException
 * @property RuntimeClientError|null $runtimeClientError
 */
class InvokeHarnessStreamOutput extends Shape
{
    /**
     * @param array{
     *     messageStart?: HarnessMessageStartEvent|null,
     *     contentBlockStart?: HarnessContentBlockStartEvent|null,
     *     contentBlockDelta?: HarnessContentBlockDeltaEvent|null,
     *     contentBlockStop?: HarnessContentBlockStopEvent|null,
     *     messageStop?: HarnessMessageStopEvent|null,
     *     metadata?: HarnessMetadataEvent|null,
     *     internalServerException?: InternalServerException|null,
     *     validationException?: ValidationException|null,
     *     runtimeClientError?: RuntimeClientError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
