<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceCode
 * @property string $ServiceName
 */
class ServiceInfo extends Shape
{
    /**
     * @param array{
     *     ServiceCode?: string,
     *     ServiceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
