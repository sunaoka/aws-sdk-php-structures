<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentStartEvent|null $contentStart
 * @property ContentDeltaEvent|null $contentDelta
 * @property ContentStopEvent|null $contentStop
 */
class ResponseChunk extends Shape
{
    /**
     * @param array{
     *     contentStart?: ContentStartEvent|null,
     *     contentDelta?: ContentDeltaEvent|null,
     *     contentStop?: ContentStopEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
