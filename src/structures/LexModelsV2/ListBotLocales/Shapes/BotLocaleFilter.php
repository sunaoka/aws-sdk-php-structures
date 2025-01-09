<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotLocales\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotLocaleName' $name
 * @property list<string> $values
 * @property 'CO'|'EQ' $operator
 */
class BotLocaleFilter extends Shape
{
    /**
     * @param array{
     *     name: 'BotLocaleName',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
