<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Message|null $Simple
 * @property RawMessage|null $Raw
 * @property Template|null $Template
 */
class EmailContent extends Shape
{
    /**
     * @param array{
     *     Simple?: Message|null,
     *     Raw?: RawMessage|null,
     *     Template?: Template|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
