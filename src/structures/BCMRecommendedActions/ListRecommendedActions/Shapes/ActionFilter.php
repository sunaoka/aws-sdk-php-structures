<?php

namespace Sunaoka\Aws\Structures\BCMRecommendedActions\ListRecommendedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FEATURE'|'SEVERITY'|'TYPE' $key
 * @property 'EQUALS'|'NOT_EQUALS' $matchOption
 * @property list<string> $values
 */
class ActionFilter extends Shape
{
    /**
     * @param array{
     *     key: 'FEATURE'|'SEVERITY'|'TYPE',
     *     matchOption: 'EQUALS'|'NOT_EQUALS',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
