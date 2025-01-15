<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $burstLimit
 * @property double|null $rateLimit
 */
class ThrottleSettings extends Shape
{
    /**
     * @param array{
     *     burstLimit?: int|null,
     *     rateLimit?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
