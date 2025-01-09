<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChildBlockId
 * @property int $BeginOffset
 * @property int $EndOffset
 */
class ChildBlock extends Shape
{
    /**
     * @param array{
     *     ChildBlockId?: string,
     *     BeginOffset?: int,
     *     EndOffset?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
