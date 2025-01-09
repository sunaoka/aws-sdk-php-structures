<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOW'|'MEDIUM'|'HIGH'|'OFF' $Sharpening
 * @property 'LOW'|'MEDIUM'|'HIGH'|'AUTO'|'OFF' $Strength
 */
class BandwidthReductionFilter extends Shape
{
    /**
     * @param array{
     *     Sharpening?: 'LOW'|'MEDIUM'|'HIGH'|'OFF',
     *     Strength?: 'LOW'|'MEDIUM'|'HIGH'|'AUTO'|'OFF'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
