<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomPromptProfile|null $ExistingPrompt
 * @property CustomPromptInputParameters|null $NewPrompt
 */
class CustomPromptInput extends Shape
{
    /**
     * @param array{
     *     ExistingPrompt?: CustomPromptProfile|null,
     *     NewPrompt?: CustomPromptInputParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
