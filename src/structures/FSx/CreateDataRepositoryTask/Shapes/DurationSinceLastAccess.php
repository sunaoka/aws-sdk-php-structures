<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS'|null $Unit
 * @property int<0, max>|null $Value
 */
class DurationSinceLastAccess extends Shape
{
    /**
     * @param array{
     *     Unit?: 'DAYS'|null,
     *     Value?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
