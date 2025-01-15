<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'LINE'|'WORD'|null $BlockType
 * @property string|null $Text
 * @property int|null $Page
 * @property Geometry|null $Geometry
 * @property list<RelationshipsListItem>|null $Relationships
 */
class Block extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     BlockType?: 'LINE'|'WORD'|null,
     *     Text?: string|null,
     *     Page?: int|null,
     *     Geometry?: Geometry|null,
     *     Relationships?: list<RelationshipsListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
