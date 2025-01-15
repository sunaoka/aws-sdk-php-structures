<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3KeyFilter|null $Key
 */
class NotificationConfigurationFilter extends Shape
{
    /**
     * @param array{Key?: S3KeyFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
