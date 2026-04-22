<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedResourceVisibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'hidden'|'visible'|null $DefaultVisibility
 */
class ManagedResourceVisibilitySettings extends Shape
{
    /**
     * @param array{DefaultVisibility?: 'hidden'|'visible'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
