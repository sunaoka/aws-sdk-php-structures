<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'PROJECT' $type
 */
class NotificationResource extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     type: 'PROJECT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
