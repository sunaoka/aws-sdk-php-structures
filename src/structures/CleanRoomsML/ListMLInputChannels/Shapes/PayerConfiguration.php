<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListMLInputChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $computePayerAccountId
 * @property string|null $syntheticDataPayerAccountId
 */
class PayerConfiguration extends Shape
{
    /**
     * @param array{
     *     computePayerAccountId?: string|null,
     *     syntheticDataPayerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
