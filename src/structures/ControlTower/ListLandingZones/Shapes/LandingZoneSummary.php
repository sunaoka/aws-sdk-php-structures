<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class LandingZoneSummary extends Shape
{
    /**
     * @param array{arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
