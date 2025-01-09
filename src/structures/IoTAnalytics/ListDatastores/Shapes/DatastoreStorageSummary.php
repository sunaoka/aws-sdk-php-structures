<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedDatastoreS3StorageSummary $serviceManagedS3
 * @property CustomerManagedDatastoreS3StorageSummary $customerManagedS3
 * @property DatastoreIotSiteWiseMultiLayerStorageSummary $iotSiteWiseMultiLayerStorage
 */
class DatastoreStorageSummary extends Shape
{
    /**
     * @param array{
     *     serviceManagedS3?: ServiceManagedDatastoreS3StorageSummary,
     *     customerManagedS3?: CustomerManagedDatastoreS3StorageSummary,
     *     iotSiteWiseMultiLayerStorage?: DatastoreIotSiteWiseMultiLayerStorageSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
