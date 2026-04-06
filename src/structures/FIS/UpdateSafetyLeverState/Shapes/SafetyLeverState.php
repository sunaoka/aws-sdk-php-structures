<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateSafetyLeverState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disengaged'|'engaged'|'engaging'|null $status
 * @property string|null $reason
 */
class SafetyLeverState extends Shape
{
    /**
     * @param array{
     *     status?: 'disengaged'|'engaged'|'engaging'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
