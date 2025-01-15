<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 */
class ModelDashboardIndicatorAction extends Shape
{
    /**
     * @param array{Enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
