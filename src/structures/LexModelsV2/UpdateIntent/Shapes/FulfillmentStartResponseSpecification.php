<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $delayInSeconds
 * @property list<MessageGroup> $messageGroups
 * @property bool $allowInterrupt
 */
class FulfillmentStartResponseSpecification extends Shape
{
    /**
     * @param array{
     *     delayInSeconds: int,
     *     messageGroups: list<MessageGroup>,
     *     allowInterrupt?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
