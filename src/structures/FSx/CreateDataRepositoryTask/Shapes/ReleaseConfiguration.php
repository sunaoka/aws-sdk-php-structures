<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DurationSinceLastAccess|null $DurationSinceLastAccess
 */
class ReleaseConfiguration extends Shape
{
    /**
     * @param array{DurationSinceLastAccess?: DurationSinceLastAccess|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
