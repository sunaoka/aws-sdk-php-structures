<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CardInput> $cards
 * @property string|null $initialPrompt
 */
class AppDefinitionInput extends Shape
{
    /**
     * @param array{
     *     cards: list<CardInput>,
     *     initialPrompt?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
