<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotLocales\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotLocaleName' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class BotLocaleSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'BotLocaleName',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
