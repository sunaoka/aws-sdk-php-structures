<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message> $messages
 * @property string $responseCard
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     messages: list<Message>,
     *     responseCard?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
