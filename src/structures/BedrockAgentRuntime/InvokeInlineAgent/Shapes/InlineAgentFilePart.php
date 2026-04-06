<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputFile>|null $files
 */
class InlineAgentFilePart extends Shape
{
    /**
     * @param array{files?: list<OutputFile>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
