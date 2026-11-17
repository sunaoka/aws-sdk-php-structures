<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextChanges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADDED'|'REMOVED'|null $ChangeType
 * @property ContextEntry|null $Context
 */
class ContextChange extends Shape
{
    /**
     * @param array{
     *     ChangeType?: 'ADDED'|'REMOVED'|null,
     *     Context?: ContextEntry|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
