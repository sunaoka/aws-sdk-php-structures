<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $tickerplantLogVolumes
 */
class TickerplantLogConfiguration extends Shape
{
    /**
     * @param array{tickerplantLogVolumes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
