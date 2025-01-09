<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactListName
 * @property string $TopicName
 */
class ListManagementOptions extends Shape
{
    /**
     * @param array{
     *     ContactListName: string,
     *     TopicName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
