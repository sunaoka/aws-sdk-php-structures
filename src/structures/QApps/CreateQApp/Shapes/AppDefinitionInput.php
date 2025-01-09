<?php

namespace Sunaoka\Aws\Structures\QApps\CreateQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CardInput> $cards
 * @property string $initialPrompt
 */
class AppDefinitionInput extends Shape
{
    /**
     * @param array{
     *     cards: list<CardInput>,
     *     initialPrompt?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
