<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property ActionFilterConfiguration|null $filterConfiguration
 */
class ActionConfiguration extends Shape
{
    /**
     * @param array{
     *     action: string,
     *     filterConfiguration?: ActionFilterConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
