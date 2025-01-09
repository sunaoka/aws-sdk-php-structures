<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $keyPrefix
 * @property string $roleArn
 */
class CustomerManagedChannelS3StorageSummary extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     keyPrefix?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
