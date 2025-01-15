<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 900> $delayInSeconds
 * @property list<MessageGroup> $messageGroups
 * @property bool|null $allowInterrupt
 */
class FulfillmentStartResponseSpecification extends Shape
{
    /**
     * @param array{
     *     delayInSeconds: int<1, 900>,
     *     messageGroups: list<MessageGroup>,
     *     allowInterrupt?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
