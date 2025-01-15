<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedChannelS3Storage|null $serviceManagedS3
 * @property CustomerManagedChannelS3Storage|null $customerManagedS3
 */
class ChannelStorage extends Shape
{
    /**
     * @param array{
     *     serviceManagedS3?: ServiceManagedChannelS3Storage|null,
     *     customerManagedS3?: CustomerManagedChannelS3Storage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
