<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property string|null $transcription
 */
class AudioSegment extends Shape
{
    /**
     * @param array{
     *     s3Uri: string,
     *     transcription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
