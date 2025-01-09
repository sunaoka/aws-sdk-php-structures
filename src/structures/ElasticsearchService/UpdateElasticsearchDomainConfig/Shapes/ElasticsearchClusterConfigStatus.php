<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ElasticsearchClusterConfig $Options
 * @property OptionStatus $Status
 */
class ElasticsearchClusterConfigStatus extends Shape
{
    /**
     * @param array{
     *     Options: ElasticsearchClusterConfig,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
