<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputFile> $files
 */
class InlineAgentFilePart extends Shape
{
    /**
     * @param array{files?: list<OutputFile>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
