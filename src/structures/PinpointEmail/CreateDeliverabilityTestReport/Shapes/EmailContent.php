<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Message $Simple
 * @property RawMessage $Raw
 * @property Template $Template
 */
class EmailContent extends Shape
{
    /**
     * @param array{
     *     Simple?: Message,
     *     Raw?: RawMessage,
     *     Template?: Template
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
