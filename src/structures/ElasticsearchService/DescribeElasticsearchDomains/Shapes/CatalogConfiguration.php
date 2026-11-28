<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedS3TablesCatalog|null $ServiceManagedS3Tables
 */
class CatalogConfiguration extends Shape
{
    /**
     * @param array{ServiceManagedS3Tables?: ServiceManagedS3TablesCatalog|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
