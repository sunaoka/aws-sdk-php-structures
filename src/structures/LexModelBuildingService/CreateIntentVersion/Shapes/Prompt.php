<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateIntentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message> $messages
 * @property int<1, 5> $maxAttempts
 * @property string $responseCard
 */
class Prompt extends Shape
{
    /**
     * @param array{
     *     messages: list<Message>,
     *     maxAttempts: int<1, 5>,
     *     responseCard?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
