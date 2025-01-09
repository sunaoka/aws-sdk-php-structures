<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimingInformation $TimingInformation
 */
class EndSessionResult extends Shape
{
    /**
     * @param array{TimingInformation?: TimingInformation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
