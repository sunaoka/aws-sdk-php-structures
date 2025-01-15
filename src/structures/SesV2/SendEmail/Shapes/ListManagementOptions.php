<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactListName
 * @property string|null $TopicName
 */
class ListManagementOptions extends Shape
{
    /**
     * @param array{
     *     ContactListName: string,
     *     TopicName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
