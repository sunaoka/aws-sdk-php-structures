<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Number
 */
class AutonomousSystem extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Number: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
