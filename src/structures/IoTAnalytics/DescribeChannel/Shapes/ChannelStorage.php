<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedChannelS3Storage $serviceManagedS3
 * @property CustomerManagedChannelS3Storage $customerManagedS3
 */
class ChannelStorage extends Shape
{
    /**
     * @param array{
     *     serviceManagedS3?: ServiceManagedChannelS3Storage,
     *     customerManagedS3?: CustomerManagedChannelS3Storage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
