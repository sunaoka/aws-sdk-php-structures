<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jsonPath
 * @property ToolOverrideInputValueConfiguration $value
 */
class ToolOverrideInputValue extends Shape
{
    /**
     * @param array{
     *     jsonPath: string,
     *     value: ToolOverrideInputValueConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
