<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyArn
 */
class AssociatedPolicy extends Shape
{
    /**
     * @param array{policyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
