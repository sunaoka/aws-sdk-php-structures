<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEEP'|'DROP' $Behavior
 * @property 'MEETS_ALL'|'MEETS_ANY' $Requirement
 * @property list<Condition> $Conditions
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Behavior: 'KEEP'|'DROP',
     *     Requirement: 'MEETS_ALL'|'MEETS_ANY',
     *     Conditions: list<Condition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
