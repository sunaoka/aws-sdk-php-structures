<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageGroup> $messageGroups
 * @property int<1, 300> $frequencyInSeconds
 * @property int<1, 900> $timeoutInSeconds
 * @property bool $allowInterrupt
 */
class StillWaitingResponseSpecification extends Shape
{
    /**
     * @param array{
     *     messageGroups: list<MessageGroup>,
     *     frequencyInSeconds: int<1, 300>,
     *     timeoutInSeconds: int<1, 900>,
     *     allowInterrupt?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
