<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputFile> $files
 */
class FilePart extends Shape
{
    /**
     * @param array{files?: list<OutputFile>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
