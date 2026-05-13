<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedSnapshotPauseOptions $Options
 * @property OptionStatus $Status
 */
class AutomatedSnapshotPauseOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: AutomatedSnapshotPauseOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
