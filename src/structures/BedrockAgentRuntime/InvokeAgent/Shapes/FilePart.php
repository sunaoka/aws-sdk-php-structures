<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputFile>|null $files
 */
class FilePart extends Shape
{
    /**
     * @param array{files?: list<OutputFile>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
