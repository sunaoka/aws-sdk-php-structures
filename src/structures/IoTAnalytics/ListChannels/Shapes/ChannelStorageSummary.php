<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedChannelS3StorageSummary $serviceManagedS3
 * @property CustomerManagedChannelS3StorageSummary $customerManagedS3
 */
class ChannelStorageSummary extends Shape
{
    /**
     * @param array{
     *     serviceManagedS3?: ServiceManagedChannelS3StorageSummary,
     *     customerManagedS3?: CustomerManagedChannelS3StorageSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
