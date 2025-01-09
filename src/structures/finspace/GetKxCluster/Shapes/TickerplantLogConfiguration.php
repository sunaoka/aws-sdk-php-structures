<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $tickerplantLogVolumes
 */
class TickerplantLogConfiguration extends Shape
{
    /**
     * @param array{tickerplantLogVolumes?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
