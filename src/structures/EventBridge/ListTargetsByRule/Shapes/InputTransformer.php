<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $InputPathsMap
 * @property string $InputTemplate
 */
class InputTransformer extends Shape
{
    /**
     * @param array{
     *     InputPathsMap?: array<string, string>|null,
     *     InputTemplate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
