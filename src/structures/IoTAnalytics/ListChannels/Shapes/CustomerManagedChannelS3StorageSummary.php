<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $keyPrefix
 * @property string|null $roleArn
 */
class CustomerManagedChannelS3StorageSummary extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     keyPrefix?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
