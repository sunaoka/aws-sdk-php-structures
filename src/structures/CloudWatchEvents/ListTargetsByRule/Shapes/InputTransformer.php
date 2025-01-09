<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $InputPathsMap
 * @property string $InputTemplate
 */
class InputTransformer extends Shape
{
    /**
     * @param array{
     *     InputPathsMap?: array<string, string>,
     *     InputTemplate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
