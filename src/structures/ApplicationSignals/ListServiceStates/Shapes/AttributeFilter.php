<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeFilterName
 * @property list<string> $AttributeFilterValues
 */
class AttributeFilter extends Shape
{
    /**
     * @param array{
     *     AttributeFilterName: string,
     *     AttributeFilterValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
