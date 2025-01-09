<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossaryTerm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $classifies
 * @property list<string> $isA
 */
class TermRelations extends Shape
{
    /**
     * @param array{
     *     classifies?: list<string>,
     *     isA?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
