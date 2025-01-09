<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateSafetyLeverState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disengaged'|'engaged' $status
 * @property string $reason
 */
class UpdateSafetyLeverStateInput extends Shape
{
    /**
     * @param array{
     *     status: 'disengaged'|'engaged',
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
