<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Score
 * @property 'PERSON'|'LOCATION'|'ORGANIZATION'|'COMMERCIAL_ITEM'|'EVENT'|'DATE'|'QUANTITY'|'TITLE'|'OTHER'|null $Type
 * @property string|null $Text
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property list<BlockReference>|null $BlockReferences
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     Score?: float|null,
     *     Type?: 'PERSON'|'LOCATION'|'ORGANIZATION'|'COMMERCIAL_ITEM'|'EVENT'|'DATE'|'QUANTITY'|'TITLE'|'OTHER'|null,
     *     Text?: string|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     BlockReferences?: list<BlockReference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
