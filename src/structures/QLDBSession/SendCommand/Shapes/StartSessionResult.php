<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SessionToken
 * @property TimingInformation $TimingInformation
 */
class StartSessionResult extends Shape
{
    /**
     * @param array{
     *     SessionToken?: string,
     *     TimingInformation?: TimingInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
