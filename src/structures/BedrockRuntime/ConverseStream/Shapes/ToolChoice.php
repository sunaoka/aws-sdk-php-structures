<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoToolChoice $auto
 * @property AnyToolChoice $any
 * @property SpecificToolChoice $tool
 */
class ToolChoice extends Shape
{
    /**
     * @param array{
     *     auto?: AutoToolChoice,
     *     any?: AnyToolChoice,
     *     tool?: SpecificToolChoice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
