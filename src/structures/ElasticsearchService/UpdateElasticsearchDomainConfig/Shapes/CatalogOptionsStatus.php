<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CatalogOptions|null $Options
 * @property OptionStatus|null $Status
 */
class CatalogOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: CatalogOptions|null,
     *     Status?: OptionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
