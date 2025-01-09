<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedDatastoreS3Storage $serviceManagedS3
 * @property CustomerManagedDatastoreS3Storage $customerManagedS3
 * @property DatastoreIotSiteWiseMultiLayerStorage $iotSiteWiseMultiLayerStorage
 */
class DatastoreStorage extends Shape
{
    /**
     * @param array{
     *     serviceManagedS3?: ServiceManagedDatastoreS3Storage,
     *     customerManagedS3?: CustomerManagedDatastoreS3Storage,
     *     iotSiteWiseMultiLayerStorage?: DatastoreIotSiteWiseMultiLayerStorage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
