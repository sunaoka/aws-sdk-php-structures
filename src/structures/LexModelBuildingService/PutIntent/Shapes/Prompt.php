<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message> $messages
 * @property int $maxAttempts
 * @property string $responseCard
 */
class Prompt extends Shape
{
    /**
     * @param array{
     *     messages: list<Message>,
     *     maxAttempts: int,
     *     responseCard?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
