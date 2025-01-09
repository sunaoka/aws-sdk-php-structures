<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Statement> $Statements
 */
class OrStatement extends Shape
{
    /**
     * @param array{Statements: list<Statement>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
