<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotName'|'BotType' $name
 * @property list<string> $values
 * @property 'CO'|'EQ'|'NE' $operator
 */
class BotFilter extends Shape
{
    /**
     * @param array{
     *     name: 'BotName'|'BotType',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'|'NE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
