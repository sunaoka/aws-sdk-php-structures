<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Percentage
 * @property bool $NotApplicable
 * @property bool $AutomaticFail
 */
class EvaluationScore extends Shape
{
    /**
     * @param array{
     *     Percentage?: double,
     *     NotApplicable?: bool,
     *     AutomaticFail?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
