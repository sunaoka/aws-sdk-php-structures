<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 * @property string|null $Term
 * @property string|null $CorrectedTerm
 */
class Correction extends Shape
{
    /**
     * @param array{
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null,
     *     Term?: string|null,
     *     CorrectedTerm?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
