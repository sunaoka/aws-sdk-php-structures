<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataBindingValue $value
 */
class MatchedDataBinding extends Shape
{
    /**
     * @param array{value: DataBindingValue} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
