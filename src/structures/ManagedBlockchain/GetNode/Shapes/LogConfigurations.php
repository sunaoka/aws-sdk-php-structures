<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogConfiguration $Cloudwatch
 */
class LogConfigurations extends Shape
{
    /**
     * @param array{Cloudwatch?: LogConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
