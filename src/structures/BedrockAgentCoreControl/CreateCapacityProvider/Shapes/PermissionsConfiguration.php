<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capacityProviderOperatorRoleArn
 */
class PermissionsConfiguration extends Shape
{
    /**
     * @param array{capacityProviderOperatorRoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
