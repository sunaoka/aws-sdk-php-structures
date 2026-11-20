<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LinkLogSettings|null $logSettings
 * @property int<100, 5000>|null $timeoutInMillis
 */
class LinkConfigParameters extends Shape
{
    /**
     * @param array{
     *     logSettings?: LinkLogSettings|null,
     *     timeoutInMillis?: int<100, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
