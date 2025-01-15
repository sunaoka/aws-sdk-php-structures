<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationProperties|null $cloudFormation
 */
class ProvisioningProperties extends Shape
{
    /**
     * @param array{cloudFormation?: CloudFormationProperties|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
