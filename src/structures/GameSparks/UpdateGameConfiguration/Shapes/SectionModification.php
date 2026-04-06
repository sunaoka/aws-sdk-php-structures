<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateGameConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADD'|'REMOVE'|'REPLACE' $Operation
 * @property string $Path
 * @property string $Section
 * @property Document|null $Value
 */
class SectionModification extends Shape
{
    /**
     * @param array{
     *     Operation: 'ADD'|'REMOVE'|'REPLACE',
     *     Path: string,
     *     Section: string,
     *     Value?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
