<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scopeArn
 */
class AssociatedScope extends Shape
{
    /**
     * @param array{scopeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
