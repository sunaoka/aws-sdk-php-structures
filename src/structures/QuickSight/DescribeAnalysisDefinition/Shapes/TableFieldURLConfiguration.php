<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableFieldLinkConfiguration $LinkConfiguration
 * @property TableFieldImageConfiguration $ImageConfiguration
 */
class TableFieldURLConfiguration extends Shape
{
    /**
     * @param array{
     *     LinkConfiguration?: TableFieldLinkConfiguration,
     *     ImageConfiguration?: TableFieldImageConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
