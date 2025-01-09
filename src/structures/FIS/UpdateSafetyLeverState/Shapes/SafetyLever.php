<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateSafetyLeverState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property SafetyLeverState $state
 */
class SafetyLever extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     state?: SafetyLeverState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
