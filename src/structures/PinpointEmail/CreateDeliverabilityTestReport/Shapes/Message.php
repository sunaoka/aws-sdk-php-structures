<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Content $Subject
 * @property Body $Body
 */
class Message extends Shape
{
    /**
     * @param array{
     *     Subject: Content,
     *     Body: Body
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
