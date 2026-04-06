<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SetParameterValueConfiguration> $ParameterValueConfigurations
 */
class CustomActionSetParametersOperation extends Shape
{
    /**
     * @param array{ParameterValueConfigurations: list<SetParameterValueConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
