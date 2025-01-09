<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $keyPrefix
 * @property string $roleArn
 */
class CustomerManagedChannelS3Storage extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     keyPrefix?: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
