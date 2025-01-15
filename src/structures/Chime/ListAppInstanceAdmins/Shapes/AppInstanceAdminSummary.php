<?php

namespace Sunaoka\Aws\Structures\Chime\ListAppInstanceAdmins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $Admin
 */
class AppInstanceAdminSummary extends Shape
{
    /**
     * @param array{Admin?: Identity|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
