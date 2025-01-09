<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterListConfiguration $FilterListConfiguration
 * @property CustomFilterListConfiguration $CustomFilterListConfiguration
 * @property CustomFilterConfiguration $CustomFilterConfiguration
 */
class CategoryFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     FilterListConfiguration?: FilterListConfiguration,
     *     CustomFilterListConfiguration?: CustomFilterListConfiguration,
     *     CustomFilterConfiguration?: CustomFilterConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
