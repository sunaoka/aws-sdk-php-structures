<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BlockId
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property list<ChildBlock>|null $ChildBlocks
 */
class BlockReference extends Shape
{
    /**
     * @param array{
     *     BlockId?: string|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     ChildBlocks?: list<ChildBlock>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
