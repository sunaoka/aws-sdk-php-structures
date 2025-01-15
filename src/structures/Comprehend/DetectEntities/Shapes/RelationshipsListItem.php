<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Ids
 * @property 'CHILD'|null $Type
 */
class RelationshipsListItem extends Shape
{
    /**
     * @param array{
     *     Ids?: list<string>|null,
     *     Type?: 'CHILD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
