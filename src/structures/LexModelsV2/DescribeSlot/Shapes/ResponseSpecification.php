<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageGroup> $messageGroups
 * @property bool $allowInterrupt
 */
class ResponseSpecification extends Shape
{
    /**
     * @param array{
     *     messageGroups: list<MessageGroup>,
     *     allowInterrupt?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
