<?php

namespace Sunaoka\Aws\Structures\FIS\GetSafetyLever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property SafetyLeverState|null $state
 */
class SafetyLever extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     state?: SafetyLeverState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
