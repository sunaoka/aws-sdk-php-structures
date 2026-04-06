<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedDatastoreS3Storage|null $serviceManagedS3
 * @property CustomerManagedDatastoreS3Storage|null $customerManagedS3
 * @property DatastoreIotSiteWiseMultiLayerStorage|null $iotSiteWiseMultiLayerStorage
 */
class DatastoreStorage extends Shape
{
    /**
     * @param array{
     *     serviceManagedS3?: ServiceManagedDatastoreS3Storage|null,
     *     customerManagedS3?: CustomerManagedDatastoreS3Storage|null,
     *     iotSiteWiseMultiLayerStorage?: DatastoreIotSiteWiseMultiLayerStorage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
