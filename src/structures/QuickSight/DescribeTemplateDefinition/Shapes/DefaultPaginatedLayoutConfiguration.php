<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultSectionBasedLayoutConfiguration $SectionBased
 */
class DefaultPaginatedLayoutConfiguration extends Shape
{
    /**
     * @param array{SectionBased?: DefaultSectionBasedLayoutConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
