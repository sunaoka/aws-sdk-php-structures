<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowedByPermissionsBoundary
 */
class PermissionsBoundaryDecisionDetail extends Shape
{
    /**
     * @param array{AllowedByPermissionsBoundary?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
