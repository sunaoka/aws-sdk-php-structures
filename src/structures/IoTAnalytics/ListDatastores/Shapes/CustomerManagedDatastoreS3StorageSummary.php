<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $keyPrefix
 * @property string $roleArn
 */
class CustomerManagedDatastoreS3StorageSummary extends Shape
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
