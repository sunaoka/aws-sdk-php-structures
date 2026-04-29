<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $managedBy
 */
class SystemManagedBlock extends Shape
{
    /**
     * @param array{managedBy: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
