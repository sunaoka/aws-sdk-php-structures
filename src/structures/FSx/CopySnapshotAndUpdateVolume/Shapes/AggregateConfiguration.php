<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Aggregates
 * @property int $TotalConstituents
 */
class AggregateConfiguration extends Shape
{
    /**
     * @param array{
     *     Aggregates?: list<string>,
     *     TotalConstituents?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
