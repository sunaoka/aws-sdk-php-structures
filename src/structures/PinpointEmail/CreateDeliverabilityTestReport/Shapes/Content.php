<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Data
 * @property string|null $Charset
 */
class Content extends Shape
{
    /**
     * @param array{
     *     Data: string,
     *     Charset?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
