<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateCustomPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, 'DENY_BY_DEFAULT'>|null $DefaultCategoryEffects
 */
class Governance extends Shape
{
    /**
     * @param array{DefaultCategoryEffects?: array<string, 'DENY_BY_DEFAULT'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
