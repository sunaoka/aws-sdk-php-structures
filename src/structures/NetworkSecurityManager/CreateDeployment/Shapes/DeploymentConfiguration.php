<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableCrossAccountVisibility
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{enableCrossAccountVisibility: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
