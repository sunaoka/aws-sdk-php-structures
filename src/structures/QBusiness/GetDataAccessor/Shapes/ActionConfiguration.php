<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property ActionFilterConfiguration $filterConfiguration
 */
class ActionConfiguration extends Shape
{
    /**
     * @param array{
     *     action: string,
     *     filterConfiguration?: ActionFilterConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
