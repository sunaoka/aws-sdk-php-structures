<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3KeyFilter $Key
 */
class NotificationConfigurationFilter extends Shape
{
    /**
     * @param array{Key?: S3KeyFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
