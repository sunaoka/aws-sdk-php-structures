<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Content $Text
 * @property Content $Html
 */
class Body extends Shape
{
    /**
     * @param array{
     *     Text?: Content,
     *     Html?: Content
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
