<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryParameters $queryParameters
 * @property DisplayConfig $displayConfig
 */
class WidgetConfig extends Shape
{
    /**
     * @param array{
     *     queryParameters: QueryParameters,
     *     displayConfig: DisplayConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
