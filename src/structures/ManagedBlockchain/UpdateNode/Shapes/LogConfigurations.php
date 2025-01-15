<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogConfiguration|null $Cloudwatch
 */
class LogConfigurations extends Shape
{
    /**
     * @param array{Cloudwatch?: LogConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
