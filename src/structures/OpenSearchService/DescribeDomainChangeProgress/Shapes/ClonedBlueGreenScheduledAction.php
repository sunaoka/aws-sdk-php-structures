<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AutomaticCutoverToPrimaryCluster'|'DeletePrimaryCluster'|null $Action
 * @property \Aws\Api\DateTimeResult|null $ScheduledTime
 */
class ClonedBlueGreenScheduledAction extends Shape
{
    /**
     * @param array{
     *     Action?: 'AutomaticCutoverToPrimaryCluster'|'DeletePrimaryCluster'|null,
     *     ScheduledTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
