<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 */
class InputWhitelistRule extends Shape
{
    /**
     * @param array{Cidr?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
