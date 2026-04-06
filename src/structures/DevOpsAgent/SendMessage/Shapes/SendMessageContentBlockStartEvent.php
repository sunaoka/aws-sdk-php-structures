<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $index
 * @property string|null $type
 * @property string|null $id
 * @property string|null $parentId
 * @property int|null $sequenceNumber
 */
class SendMessageContentBlockStartEvent extends Shape
{
    /**
     * @param array{
     *     index?: int|null,
     *     type?: string|null,
     *     id?: string|null,
     *     parentId?: string|null,
     *     sequenceNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
