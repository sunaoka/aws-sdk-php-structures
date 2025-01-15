<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SessionToken
 * @property TimingInformation|null $TimingInformation
 */
class StartSessionResult extends Shape
{
    /**
     * @param array{
     *     SessionToken?: string|null,
     *     TimingInformation?: TimingInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
