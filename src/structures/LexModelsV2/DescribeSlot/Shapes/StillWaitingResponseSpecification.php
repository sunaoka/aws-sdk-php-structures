<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageGroup> $messageGroups
 * @property int $frequencyInSeconds
 * @property int $timeoutInSeconds
 * @property bool $allowInterrupt
 */
class StillWaitingResponseSpecification extends Shape
{
    /**
     * @param array{
     *     messageGroups: list<MessageGroup>,
     *     frequencyInSeconds: int,
     *     timeoutInSeconds: int,
     *     allowInterrupt?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
