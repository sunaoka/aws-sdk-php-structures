<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<Term>|null $Terms
 */
class AppliedTerminology extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Terms?: list<Term>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
