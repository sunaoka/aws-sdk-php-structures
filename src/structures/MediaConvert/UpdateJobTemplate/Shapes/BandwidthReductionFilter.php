<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOW'|'MEDIUM'|'HIGH'|'OFF'|null $Sharpening
 * @property 'LOW'|'MEDIUM'|'HIGH'|'AUTO'|'OFF'|null $Strength
 */
class BandwidthReductionFilter extends Shape
{
    /**
     * @param array{
     *     Sharpening?: 'LOW'|'MEDIUM'|'HIGH'|'OFF'|null,
     *     Strength?: 'LOW'|'MEDIUM'|'HIGH'|'AUTO'|'OFF'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
