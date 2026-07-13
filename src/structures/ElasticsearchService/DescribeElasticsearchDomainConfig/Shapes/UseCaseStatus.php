<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEARCH'|'VECTOR'|'OBSERVABILITY'|'MIXED' $Options
 * @property OptionStatus $Status
 */
class UseCaseStatus extends Shape
{
    /**
     * @param array{
     *     Options: 'SEARCH'|'VECTOR'|'OBSERVABILITY'|'MIXED',
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
