<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotSiteWiseCustomerManagedDatastoreS3StorageSummary|null $customerManagedS3Storage
 */
class DatastoreIotSiteWiseMultiLayerStorageSummary extends Shape
{
    /**
     * @param array{customerManagedS3Storage?: IotSiteWiseCustomerManagedDatastoreS3StorageSummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
