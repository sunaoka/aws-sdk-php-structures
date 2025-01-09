<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BeginOffset
 * @property int $EndOffset
 * @property string $Term
 * @property string $CorrectedTerm
 */
class Correction extends Shape
{
    /**
     * @param array{
     *     BeginOffset?: int,
     *     EndOffset?: int,
     *     Term?: string,
     *     CorrectedTerm?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
