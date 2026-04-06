<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'unlimited'|null $CpuCredits
 */
class CreditSpecificationRequest extends Shape
{
    /**
     * @param array{CpuCredits?: 'standard'|'unlimited'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
