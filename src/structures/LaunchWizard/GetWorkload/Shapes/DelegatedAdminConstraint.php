<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $servicePrincipal
 */
class DelegatedAdminConstraint extends Shape
{
    /**
     * @param array{servicePrincipal: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
