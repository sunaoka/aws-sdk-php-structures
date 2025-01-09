<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DurationSinceLastAccess $DurationSinceLastAccess
 */
class ReleaseConfiguration extends Shape
{
    /**
     * @param array{DurationSinceLastAccess?: DurationSinceLastAccess} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
