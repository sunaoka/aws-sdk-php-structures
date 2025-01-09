<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $frequencyInSeconds
 * @property list<MessageGroup> $messageGroups
 * @property bool $allowInterrupt
 */
class FulfillmentUpdateResponseSpecification extends Shape
{
    /**
     * @param array{
     *     frequencyInSeconds: int,
     *     messageGroups: list<MessageGroup>,
     *     allowInterrupt?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
