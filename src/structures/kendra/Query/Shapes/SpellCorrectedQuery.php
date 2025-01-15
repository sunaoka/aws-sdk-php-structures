<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SuggestedQueryText
 * @property list<Correction>|null $Corrections
 */
class SpellCorrectedQuery extends Shape
{
    /**
     * @param array{
     *     SuggestedQueryText?: string|null,
     *     Corrections?: list<Correction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
