<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property bool $TopAnswer
 * @property 'STANDARD'|'THESAURUS_SYNONYM' $Type
 */
class Highlight extends Shape
{
    /**
     * @param array{
     *     BeginOffset: int,
     *     EndOffset: int,
     *     TopAnswer?: bool,
     *     Type?: 'STANDARD'|'THESAURUS_SYNONYM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
