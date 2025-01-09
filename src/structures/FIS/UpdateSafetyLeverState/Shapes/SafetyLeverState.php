<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateSafetyLeverState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disengaged'|'engaged'|'engaging' $status
 * @property string $reason
 */
class SafetyLeverState extends Shape
{
    /**
     * @param array{
     *     status?: 'disengaged'|'engaged'|'engaging',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
