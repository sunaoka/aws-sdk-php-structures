<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $OptInStatus
 */
class OpsCenterIntegrationConfig extends Shape
{
    /**
     * @param array{OptInStatus?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
