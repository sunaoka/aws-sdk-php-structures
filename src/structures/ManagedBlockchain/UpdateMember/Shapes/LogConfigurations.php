<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateMember\Shapes;

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
