<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ASName
 * @property int $ASNumber
 */
class Network extends Shape
{
    /**
     * @param array{
     *     ASName: string,
     *     ASNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
