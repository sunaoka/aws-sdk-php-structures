<?php

namespace Sunaoka\Aws\Structures\Rds\CreateCustomDBEngineVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimezoneName
 */
class Timezone extends Shape
{
    /**
     * @param array{TimezoneName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
