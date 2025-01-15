<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultSectionBasedLayoutConfiguration|null $SectionBased
 */
class DefaultPaginatedLayoutConfiguration extends Shape
{
    /**
     * @param array{SectionBased?: DefaultSectionBasedLayoutConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
