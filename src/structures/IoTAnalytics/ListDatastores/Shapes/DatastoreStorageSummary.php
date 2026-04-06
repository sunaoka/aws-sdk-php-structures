<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedDatastoreS3StorageSummary|null $serviceManagedS3
 * @property CustomerManagedDatastoreS3StorageSummary|null $customerManagedS3
 * @property DatastoreIotSiteWiseMultiLayerStorageSummary|null $iotSiteWiseMultiLayerStorage
 */
class DatastoreStorageSummary extends Shape
{
    /**
     * @param array{
     *     serviceManagedS3?: ServiceManagedDatastoreS3StorageSummary|null,
     *     customerManagedS3?: CustomerManagedDatastoreS3StorageSummary|null,
     *     iotSiteWiseMultiLayerStorage?: DatastoreIotSiteWiseMultiLayerStorageSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
