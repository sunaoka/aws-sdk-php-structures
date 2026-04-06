<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryExtractionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property int $messageIndex
 */
class MessageMetadata extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     messageIndex: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
