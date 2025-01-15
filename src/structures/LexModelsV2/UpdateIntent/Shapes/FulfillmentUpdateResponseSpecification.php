<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 900> $frequencyInSeconds
 * @property list<MessageGroup> $messageGroups
 * @property bool|null $allowInterrupt
 */
class FulfillmentUpdateResponseSpecification extends Shape
{
    /**
     * @param array{
     *     frequencyInSeconds: int<1, 900>,
     *     messageGroups: list<MessageGroup>,
     *     allowInterrupt?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
