<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyIdentifier
 */
class PolicyReference extends Shape
{
    /**
     * @param array{policyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
