<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3TablesEncryptionConfiguration|null $EncryptionConfiguration
 */
class ServiceManagedS3TablesCatalog extends Shape
{
    /**
     * @param array{EncryptionConfiguration?: S3TablesEncryptionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
