<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appDefinitionVersion
 * @property list<Card> $cards
 * @property bool $canEdit
 */
class AppDefinition extends Shape
{
    /**
     * @param array{
     *     appDefinitionVersion: string,
     *     cards: list<Card>,
     *     canEdit?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
