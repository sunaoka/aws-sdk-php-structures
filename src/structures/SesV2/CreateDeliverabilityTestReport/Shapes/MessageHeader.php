<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 */
class MessageHeader extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
