<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scopeIdentifier
 */
class ScopeReference extends Shape
{
    /**
     * @param array{scopeIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
