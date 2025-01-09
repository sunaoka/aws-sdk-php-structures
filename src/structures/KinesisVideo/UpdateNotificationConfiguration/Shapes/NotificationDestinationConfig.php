<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uri
 */
class NotificationDestinationConfig extends Shape
{
    /**
     * @param array{Uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
