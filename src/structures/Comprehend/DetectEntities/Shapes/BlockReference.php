<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BlockId
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property list<ChildBlock> $ChildBlocks
 */
class BlockReference extends Shape
{
    /**
     * @param array{
     *     BlockId?: string,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     ChildBlocks?: list<ChildBlock>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
