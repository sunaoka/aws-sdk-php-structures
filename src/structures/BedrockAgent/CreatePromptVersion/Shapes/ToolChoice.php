<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnyToolChoice $any
 * @property AutoToolChoice $auto
 * @property SpecificToolChoice $tool
 */
class ToolChoice extends Shape
{
    /**
     * @param array{
     *     any?: AnyToolChoice,
     *     auto?: AutoToolChoice,
     *     tool?: SpecificToolChoice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
