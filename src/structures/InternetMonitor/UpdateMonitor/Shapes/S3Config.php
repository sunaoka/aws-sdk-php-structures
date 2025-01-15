<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\UpdateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property string|null $BucketPrefix
 * @property 'ENABLED'|'DISABLED'|null $LogDeliveryStatus
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     BucketPrefix?: string|null,
     *     LogDeliveryStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
