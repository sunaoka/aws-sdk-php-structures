<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $keyPrefix
 */
class IotSiteWiseCustomerManagedDatastoreS3StorageSummary extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
