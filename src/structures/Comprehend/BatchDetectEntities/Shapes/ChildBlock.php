<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChildBlockId
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 */
class ChildBlock extends Shape
{
    /**
     * @param array{
     *     ChildBlockId?: string|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
