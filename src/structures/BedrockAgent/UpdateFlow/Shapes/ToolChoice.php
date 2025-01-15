<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnyToolChoice|null $any
 * @property AutoToolChoice|null $auto
 * @property SpecificToolChoice|null $tool
 */
class ToolChoice extends Shape
{
    /**
     * @param array{
     *     any?: AnyToolChoice|null,
     *     auto?: AutoToolChoice|null,
     *     tool?: SpecificToolChoice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
