<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $disabledOnInitialization
 */
class InitializationConfiguration extends Shape
{
    /**
     * @param array{disabledOnInitialization: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
