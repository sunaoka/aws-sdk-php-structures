<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<Term> $Terms
 */
class AppliedTerminology extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Terms?: list<Term>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
