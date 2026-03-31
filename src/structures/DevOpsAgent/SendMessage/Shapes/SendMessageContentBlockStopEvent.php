<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $index
 * @property string|null $type
 * @property string|null $text
 * @property bool|null $last
 * @property int|null $sequenceNumber
 */
class SendMessageContentBlockStopEvent extends Shape
{
    /**
     * @param array{
     *     index?: int|null,
     *     type?: string|null,
     *     text?: string|null,
     *     last?: bool|null,
     *     sequenceNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
