<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE' $filterType
 * @property list<Filter> $filterConfiguration
 * @property Action $action
 * @property float $holdbackPercentage
 */
class OpenRtbAttributeModuleParameters extends Shape
{
    /**
     * @param array{
     *     filterType: 'INCLUDE'|'EXCLUDE',
     *     filterConfiguration: list<Filter>,
     *     action: Action,
     *     holdbackPercentage: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
