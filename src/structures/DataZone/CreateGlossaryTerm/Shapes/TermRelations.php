<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossaryTerm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $classifies
 * @property list<string>|null $isA
 */
class TermRelations extends Shape
{
    /**
     * @param array{
     *     classifies?: list<string>|null,
     *     isA?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
