<?php

namespace Sunaoka\Aws\Structures\Athena\ListApplicationDPUSizes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationRuntimeId
 * @property list<int> $SupportedDPUSizes
 */
class ApplicationDPUSizes extends Shape
{
    /**
     * @param array{
     *     ApplicationRuntimeId?: string,
     *     SupportedDPUSizes?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
