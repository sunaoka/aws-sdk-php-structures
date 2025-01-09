<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationProperties $cloudFormation
 */
class ProvisioningProperties extends Shape
{
    /**
     * @param array{cloudFormation?: CloudFormationProperties} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
