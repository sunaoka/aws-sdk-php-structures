<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceCode
 * @property string|null $ServiceName
 */
class ServiceInfo extends Shape
{
    /**
     * @param array{
     *     ServiceCode?: string|null,
     *     ServiceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
