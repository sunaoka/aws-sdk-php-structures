<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SuggestedQueryText
 * @property list<Correction> $Corrections
 */
class SpellCorrectedQuery extends Shape
{
    /**
     * @param array{
     *     SuggestedQueryText?: string,
     *     Corrections?: list<Correction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
