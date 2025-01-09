<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'LINE'|'WORD' $BlockType
 * @property string $Text
 * @property int $Page
 * @property Geometry $Geometry
 * @property list<RelationshipsListItem> $Relationships
 */
class Block extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     BlockType?: 'LINE'|'WORD',
     *     Text?: string,
     *     Page?: int,
     *     Geometry?: Geometry,
     *     Relationships?: list<RelationshipsListItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
