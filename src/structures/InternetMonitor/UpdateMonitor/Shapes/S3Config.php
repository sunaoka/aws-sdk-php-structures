<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\UpdateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketPrefix
 * @property 'ENABLED'|'DISABLED' $LogDeliveryStatus
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     BucketPrefix?: string,
     *     LogDeliveryStatus?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
