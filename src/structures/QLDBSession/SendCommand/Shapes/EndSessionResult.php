<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimingInformation|null $TimingInformation
 */
class EndSessionResult extends Shape
{
    /**
     * @param array{TimingInformation?: TimingInformation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
