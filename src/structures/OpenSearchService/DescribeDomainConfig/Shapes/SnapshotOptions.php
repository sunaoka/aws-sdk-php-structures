<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AutomatedSnapshotStartHour
 */
class SnapshotOptions extends Shape
{
    /**
     * @param array{AutomatedSnapshotStartHour?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
