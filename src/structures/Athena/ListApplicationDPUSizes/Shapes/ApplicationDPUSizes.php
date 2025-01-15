<?php

namespace Sunaoka\Aws\Structures\Athena\ListApplicationDPUSizes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationRuntimeId
 * @property list<int>|null $SupportedDPUSizes
 */
class ApplicationDPUSizes extends Shape
{
    /**
     * @param array{
     *     ApplicationRuntimeId?: string|null,
     *     SupportedDPUSizes?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
