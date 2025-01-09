<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Score
 * @property 'PERSON'|'LOCATION'|'ORGANIZATION'|'COMMERCIAL_ITEM'|'EVENT'|'DATE'|'QUANTITY'|'TITLE'|'OTHER' $Type
 * @property string $Text
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property list<BlockReference> $BlockReferences
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     Score?: float,
     *     Type?: 'PERSON'|'LOCATION'|'ORGANIZATION'|'COMMERCIAL_ITEM'|'EVENT'|'DATE'|'QUANTITY'|'TITLE'|'OTHER',
     *     Text?: string,
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     BlockReferences?: list<BlockReference>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
