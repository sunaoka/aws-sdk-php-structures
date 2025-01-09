<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Hours
 * @property int $Minutes
 */
class WindowStartTime extends Shape
{
    /**
     * @param array{
     *     Hours: int,
     *     Minutes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
