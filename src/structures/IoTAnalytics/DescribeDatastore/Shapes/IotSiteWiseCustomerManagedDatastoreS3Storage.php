<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $keyPrefix
 */
class IotSiteWiseCustomerManagedDatastoreS3Storage extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
