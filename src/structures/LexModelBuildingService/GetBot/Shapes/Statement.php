<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message> $messages
 * @property string|null $responseCard
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     messages: list<Message>,
     *     responseCard?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
