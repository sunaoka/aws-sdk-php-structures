<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $keyPrefix
 */
class IotSiteWiseCustomerManagedDatastoreS3Storage extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     keyPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
