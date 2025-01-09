<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputName
 */
class IotEventsInputIdentifier extends Shape
{
    /**
     * @param array{inputName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
