<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotSiteWiseCustomerManagedDatastoreS3Storage $customerManagedS3Storage
 */
class DatastoreIotSiteWiseMultiLayerStorage extends Shape
{
    /**
     * @param array{customerManagedS3Storage: IotSiteWiseCustomerManagedDatastoreS3Storage} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
