<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $burstLimit
 * @property double $rateLimit
 */
class ThrottleSettings extends Shape
{
    /**
     * @param array{
     *     burstLimit?: int,
     *     rateLimit?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
