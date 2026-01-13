<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROJECT' $type
 * @property string $id
 * @property string|null $name
 */
class NotificationResource extends Shape
{
    /**
     * @param array{
     *     type: 'PROJECT',
     *     id: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
