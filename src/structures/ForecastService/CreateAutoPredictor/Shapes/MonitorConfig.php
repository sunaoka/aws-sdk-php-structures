<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitorName
 */
class MonitorConfig extends Shape
{
    /**
     * @param array{MonitorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
