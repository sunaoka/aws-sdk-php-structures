<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $isA
 * @property list<string>|null $classifies
 */
class TermRelations extends Shape
{
    /**
     * @param array{
     *     isA?: list<string>|null,
     *     classifies?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
