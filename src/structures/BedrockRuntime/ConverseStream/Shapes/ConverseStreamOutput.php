<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageStartEvent $messageStart
 * @property ContentBlockStartEvent $contentBlockStart
 * @property ContentBlockDeltaEvent $contentBlockDelta
 * @property ContentBlockStopEvent $contentBlockStop
 * @property MessageStopEvent $messageStop
 * @property ConverseStreamMetadataEvent $metadata
 * @property InternalServerException $internalServerException
 * @property ModelStreamErrorException $modelStreamErrorException
 * @property ValidationException $validationException
 * @property ThrottlingException $throttlingException
 * @property ServiceUnavailableException $serviceUnavailableException
 */
class ConverseStreamOutput extends Shape
{
    /**
     * @param array{
     *     messageStart?: MessageStartEvent,
     *     contentBlockStart?: ContentBlockStartEvent,
     *     contentBlockDelta?: ContentBlockDeltaEvent,
     *     contentBlockStop?: ContentBlockStopEvent,
     *     messageStop?: MessageStopEvent,
     *     metadata?: ConverseStreamMetadataEvent,
     *     internalServerException?: InternalServerException,
     *     modelStreamErrorException?: ModelStreamErrorException,
     *     validationException?: ValidationException,
     *     throttlingException?: ThrottlingException,
     *     serviceUnavailableException?: ServiceUnavailableException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
