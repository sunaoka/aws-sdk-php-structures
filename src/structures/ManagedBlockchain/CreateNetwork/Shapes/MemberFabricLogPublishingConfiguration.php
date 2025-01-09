<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogConfigurations $CaLogs
 */
class MemberFabricLogPublishingConfiguration extends Shape
{
    /**
     * @param array{CaLogs?: LogConfigurations} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
