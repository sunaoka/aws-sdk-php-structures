<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 */
class SecurityProfileItem extends Shape
{
    /**
     * @param array{Id?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
