<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerManagedS3Storage $customerManagedS3Storage
 */
class MultiLayerStorage extends Shape
{
    /**
     * @param array{customerManagedS3Storage: CustomerManagedS3Storage} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
