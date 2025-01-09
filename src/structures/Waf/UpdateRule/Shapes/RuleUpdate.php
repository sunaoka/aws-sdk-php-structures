<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property Predicate $Predicate
 */
class RuleUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     Predicate: Predicate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
