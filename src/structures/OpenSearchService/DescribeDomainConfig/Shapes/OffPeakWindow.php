<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WindowStartTime|null $WindowStartTime
 */
class OffPeakWindow extends Shape
{
    /**
     * @param array{WindowStartTime?: WindowStartTime|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
