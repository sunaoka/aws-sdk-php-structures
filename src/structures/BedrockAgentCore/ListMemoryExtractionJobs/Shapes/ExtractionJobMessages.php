<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryExtractionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageMetadata>|null $messagesList
 */
class ExtractionJobMessages extends Shape
{
    /**
     * @param array{messagesList?: list<MessageMetadata>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
