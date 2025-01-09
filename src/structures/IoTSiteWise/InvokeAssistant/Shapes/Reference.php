<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSetReference $dataset
 */
class Reference extends Shape
{
    /**
     * @param array{dataset?: DataSetReference} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
