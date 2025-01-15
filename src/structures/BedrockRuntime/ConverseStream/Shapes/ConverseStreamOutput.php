<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageStartEvent|null $messageStart
 * @property ContentBlockStartEvent|null $contentBlockStart
 * @property ContentBlockDeltaEvent|null $contentBlockDelta
 * @property ContentBlockStopEvent|null $contentBlockStop
 * @property MessageStopEvent|null $messageStop
 * @property ConverseStreamMetadataEvent|null $metadata
 * @property InternalServerException|null $internalServerException
 * @property ModelStreamErrorException|null $modelStreamErrorException
 * @property ValidationException|null $validationException
 * @property ThrottlingException|null $throttlingException
 * @property ServiceUnavailableException|null $serviceUnavailableException
 */
class ConverseStreamOutput extends Shape
{
    /**
     * @param array{
     *     messageStart?: MessageStartEvent|null,
     *     contentBlockStart?: ContentBlockStartEvent|null,
     *     contentBlockDelta?: ContentBlockDeltaEvent|null,
     *     contentBlockStop?: ContentBlockStopEvent|null,
     *     messageStop?: MessageStopEvent|null,
     *     metadata?: ConverseStreamMetadataEvent|null,
     *     internalServerException?: InternalServerException|null,
     *     modelStreamErrorException?: ModelStreamErrorException|null,
     *     validationException?: ValidationException|null,
     *     throttlingException?: ThrottlingException|null,
     *     serviceUnavailableException?: ServiceUnavailableException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
