<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Utterance' $name
 * @property list<string> $values
 * @property 'CO'|'EQ' $operator
 */
class AggregatedUtterancesFilter extends Shape
{
    /**
     * @param array{
     *     name: 'Utterance',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
