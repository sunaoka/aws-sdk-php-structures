<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnapshotOptions $Options
 * @property OptionStatus $Status
 */
class SnapshotOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: SnapshotOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
