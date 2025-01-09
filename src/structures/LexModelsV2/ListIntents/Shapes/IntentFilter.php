<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentName' $name
 * @property list<string> $values
 * @property 'CO'|'EQ' $operator
 */
class IntentFilter extends Shape
{
    /**
     * @param array{
     *     name: 'IntentName',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
