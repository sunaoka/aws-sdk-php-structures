<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowedByPermissionsBoundary
 */
class PermissionsBoundaryDecisionDetail extends Shape
{
    /**
     * @param array{AllowedByPermissionsBoundary?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
