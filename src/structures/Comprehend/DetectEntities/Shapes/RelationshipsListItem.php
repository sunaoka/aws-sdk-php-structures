<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Ids
 * @property 'CHILD' $Type
 */
class RelationshipsListItem extends Shape
{
    /**
     * @param array{
     *     Ids?: list<string>,
     *     Type?: 'CHILD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
