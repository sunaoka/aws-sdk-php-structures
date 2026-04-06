<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoToolChoice|null $auto
 * @property AnyToolChoice|null $any
 * @property SpecificToolChoice|null $tool
 */
class ToolChoice extends Shape
{
    /**
     * @param array{
     *     auto?: AutoToolChoice|null,
     *     any?: AnyToolChoice|null,
     *     tool?: SpecificToolChoice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
