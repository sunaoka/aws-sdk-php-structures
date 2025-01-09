<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInputSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 */
class InputWhitelistRuleCidr extends Shape
{
    /**
     * @param array{Cidr?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
