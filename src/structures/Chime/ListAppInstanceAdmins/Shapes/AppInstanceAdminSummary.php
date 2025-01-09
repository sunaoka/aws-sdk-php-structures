<?php

namespace Sunaoka\Aws\Structures\Chime\ListAppInstanceAdmins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $Admin
 */
class AppInstanceAdminSummary extends Shape
{
    /**
     * @param array{Admin?: Identity} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
