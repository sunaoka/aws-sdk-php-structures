<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityProviderOperatorRoleArn
 */
class CapacityProviderPermissionsConfig extends Shape
{
    /**
     * @param array{CapacityProviderOperatorRoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
