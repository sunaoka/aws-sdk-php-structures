<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSetReference|null $dataset
 */
class Reference extends Shape
{
    /**
     * @param array{dataset?: DataSetReference|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
