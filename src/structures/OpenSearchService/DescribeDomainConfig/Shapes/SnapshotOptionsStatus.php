<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

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
